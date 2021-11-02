import React, {Component} from 'react';
import $ from 'jquery';
import _,  { debounce }  from 'lodash';
import moment from "moment";

import { Context } from './Context';
import ErrorBoundary from './error/ErrorBoundary';
import Request from './Request';
import Dashboard from './dashboard/Dashboard';
import ProductList from './products/ProductList';

import './../public/css/Main.css';

const ADMIN_LOCATIONS = [
    ":8181"
];

class Main extends Component {

    static contextType = Context;

    constructor(props, context) {
        super(props, context);

        const location = this._parseLocation();
        this.defaultView = {
            module: "products",
            action: "list",
            dashboard: false,
        }

        this.state = {
            view : {
                ...this.defaultView,
                ...location,
            },
            settingsLoaded: false,
            registeredUser: {}
        };

        this.refErrorBoundary = React.createRef();
        this.refDashboard = React.createRef();

        this.settings = context;

    }

    componentDidMount() {

        //user still logged in, no expiration yet, page closed/a new tab opened.
        const tokenData = this._parseToken();
        if (tokenData) {
            //lets take the user to the first page

            this.setState({
                view : {
                    ...this.defaultView,
                    ...this._parseLocation()
                },
                settingsLoaded: true,
                registeredUser: {...JSON.parse(sessionStorage.userData || null)}
            }, () => {
                this.settings.user = this.state.registeredUser;
                this.settings.rights = JSON.parse(sessionStorage.rights || null);
            });
        }

        const adminLocation = ADMIN_LOCATIONS.some(e => window.location.href.indexOf(e) !== -1);
        const adminUrl = this.state.view.dashboard;

        (adminLocation || adminUrl) && this._toggleDashboard(true);

        window.addEventListener("beforeunload", this.onBeforeUnload);
    }

    componentWillUnmount() {
        window.removeEventListener("beforeunload", this.onBeforeUnload);
    }

    _toggleDashboard = (show) => {
        this.setState({dashboardVisible: show || !this.state.dashboardVisible});
    }

    _parseToken () {
        const token = sessionStorage.token;
        if (!token) 
            return;

        let base64Url = token.split('.')[1];
        let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        let jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        
        return JSON.parse(jsonPayload || null);
    };

    _parseLocation = () => {

        let parsed = {};
        let location = window.location.href.split('?');

        if (!location[1])
            return;

        location[1].split("&").forEach(e => {
            let split = e.split("=");

            if (split[1] === "false")
                split[1] = false;
            else if (split[1] === "true")
                split[1] = true;
            else if (split[1] === "undefined" || split[1] == "")
                split[1] = undefined;
                
            parsed[split[0]] = typeof split[1] === "string" ? split[1].replace("#", "") : split[1];
        });

        if (!parsed.module)
            return;

        return parsed;
    }

    _parseTokenData = () => {
        const token = sessionStorage.token;
        
        if (token && token.length > 50) {
            //user has already logged in
            try {
                const jwt = this._parseJwt();

                return jwt;
            }catch (e) {
                console.log(e, "PARSE TOKEN DATA ERROR: ", e);
                return {}
            }
        }
        
        return {};
    }

    _parseJwt () {
        const token = sessionStorage.token;
        let base64Url = token.split('.')[1];
        let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
        let jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        
        let data = JSON.parse(jsonPayload);

        return data;
    };

    _refreshToken = async () => {
        const response = await Request.get({url: 'auth/refresh_token'});
 
        sessionStorage.setItem('token', response.token);
        this.setTokenExpiration();
    }

    _handleActivityEvent = debounce((evt) => {
        sessionStorage.setItem("lastActivityTime", moment().unix());
    }, 3000);


    //not yet implemented
    _loopActivityTime = () => {
        const time = moment().unix();
        const sessionTimeout = this.settings.sessionTimeout || this.context.sessionTimeout;
        const { tokenIssued, tokenExpires, tokenRefresh, lastActivityTime } = sessionStorage;
        
        if (this.activityTimer)
            clearTimeout(this.activityTimer);
        
        if (!tokenIssued) {
            localStorage.logout = "no token data, logout \n";
            return this.logout();
        }   
        if (time > tokenExpires) {
            localStorage.logout = `token expired, current ${time}, exp ${tokenExpires}, logout \n`;
            return this.logout();
        }
        if (time - lastActivityTime > sessionTimeout) {
            localStorage.logout = `no activity, last ${lastActivityTime}, sessionTimeout ${sessionTimeout} logout \n`;
            return this.logout();
        }
        if (moment().unix() > tokenRefresh) {
            this._refreshToken();
        }
        
        this.activityTimer = setTimeout(() => {
            this._loopActivityTime();
        }, 10000);
        
    }

    _renderMenuItems = () => {
        const { menuItems } = {...(this.settings.views || this.context.defaultViews)};
        return menuItems?.map((name) => {
            
            if (!checkRights(name, 'read'))
                return undefined;
            return (
                <BottomNavigationAction label={name.toUpperCase()} />
            );
        });
    };

    logout = () => {
        sessionStorage.clear();
        clearTimeout(this.activityTimer);

        this.settings = this.context;
        this.setState({
            view : {...this.defaultView},
            settingsLoaded: false, 
            registeredUser: {}
        });
    }    

    setTokenExpiration(initial) {
        const tokenData = this._parseTokenData();
        const time = moment().unix();
        const expireTime = tokenData.exp - tokenData.iat;

        sessionStorage.setItem('tokenIssued', time);
        sessionStorage.setItem('tokenExpires', time + expireTime);
        sessionStorage.setItem('tokenRefresh', time + (expireTime / 2));
        sessionStorage.setItem("lastActivityTime", moment().unix());

        if (initial) {
            sessionStorage.setItem('userData', JSON.stringify({userData: {id: tokenData.sub}}));
            this.setState({registeredUser: {id: tokenData.sub}}, () => this.getBasics(this.state.registeredUser.id));
        }
    }

    getBasics = async () => {

        let data = {}

        try {
            data = await Request.get({ url: `get_basics/${this.state.registeredUser.id}`});
        } catch (e) {
            console.error(e);
            return;
        }

        const { user:{id, first_name, last_name}, globals:{company, currency}, rights } = data; 
        this.settings.user = {...this.settings.user,
            userId: id,
            firstName: first_name,
            lastName: last_name,
        };

        this.settings.globals = {...this.settings.globals, 
            companyName: company,
            currency: currency
        };

        sessionStorage.setItem('rights', JSON.stringify(rights));
        sessionStorage.setItem('userData', JSON.stringify(this.settings.user));
        
        this.setState({ settingsLoaded: true, registeredUser: {...this.settings.user}}); 

        this.updateView({action: 'list', module: 'products'});
    }    
   
    updateView = (update, newWindow, rememberPage = false, getBasics = false, windowTitle = null) => {

        if (windowTitle !== null) 
            document.title = `Assignment - ${windowTitle} `;

        
        if (rememberPage) {
            localStorage.lastView = JSON.stringify({...update});
        }

        const url = `index.php?${$.param(update)}`;
        let win;
        if (newWindow)
            win = window.open(url, '_blank');
        else 
            this.setState({view: update}, () => 
                getBasics && this.getBasics()
            );
    }

    render() {

        const props = { ...this.state.view, updateView: () => this.updateView() };
        const { view: {module, action}, registeredUser } = this.state;

        const views = {
            'products-list': (<ProductList {...props} userData={registeredUser} />),
        };

        let selectedPage = `${module}-${action}`;


        if (registeredUser.userId)
            this.settings.functions.checkRights(registeredUser.userId, 'admin');


        const dashboardProps = {
            ...props,
            loginVisible: _.isEmpty(registeredUser),
            setTokenExpiration: (isInitial) => this.setTokenExpiration(isInitial),
            isDev: registeredUser.userId && this.settings.functions.checkRights(registeredUser.userId, 'admin'),
            onDevElementChange: (element) => this.updateView({module: element, action: list, editMode: true}),
            logout: this.logout
        }

        return (

            <Context.Provider value={this.settings}>

                <div id="react-content" >

                    {this.state.dashboardVisible && 
                        <Dashboard 
                            innerRef={this.refDashboard}
                            {...dashboardProps}
                        />}

                    
                    <ErrorBoundary ref={this.refErrorBoundary} updateView={() => this.updateView} >

                        {views[selectedPage]}

                    </ErrorBoundary>
                    

                </div>

            </Context.Provider>

        );
    }
}

export default Main;
