import React, {Component} from 'react';
import _ from 'lodash';

import { Context } from '../Context';
import Login from './Login';

import { Tabs, Tab, Button } from '@mui/material';

import './../../public/css/Dashboard.css';


class Dashboard extends React.Component {
    static contextType = Context;

    static defaultProps = {
        loginVisible: false
    };

    constructor(props, context) {
        super(props, context);

        this.state = {
            tabValue: '',
        };

        this.devElements = ['something_dev'];

        this.loginModule = React.createRef();
    }

    _handleChange = (event, newValue) => {
        this.setState({tabValue: newValue});
        this.props.onDevElementChange(newValue);
    };    

    _renderDevElements = () => {
        const { isDev } = this.props;
        if (!isDev)
            return false;
        const { checkRights } = this.context;console.log(this.devElements)
        return this.devElements.map((elementName) => {console.log(elementName)
            
            //load some dev rights
            // if (!checkDevRights(elementName, 'write'))
            //     return undefined;

            //performs simple edit tag right now, but can contain anything via component prop, for example inputs or dropdowns etc.
            return (
                <Tab
                    value={elementName}
                    label={elementName}
                    wrapped
                />
            );
        });
    };    

    render() {

        const { tabValue } = this.state;

        const { loginVisible, setTokenExpiration, isDev } = this.props;

        const loginProps  = {
            setTokenExpiration: setTokenExpiration,
        };

        return (
                <div className="dashboard">
                    <div className="login-container">
                        {loginVisible ? 
                            <Login {...loginProps} /> : 
                            <Button className="login-button" color="primary" size="large" onClick={this.props.logout} >
                                {("Logout").toUpperCase()}
                            </Button> }
                    </div>
                    {isDev && <div className="devElements-container">
                        <Tabs
                            onChange={this._handleChange} >

                            {this._renderDevElements()}

                        </Tabs>
                    </div>}
                </div>
        );
    }
}

export default Dashboard;