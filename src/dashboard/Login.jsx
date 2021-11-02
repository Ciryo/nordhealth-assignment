import React, {Component} from 'react';
import $ from 'jquery';
import _ from 'lodash';

import { Context } from '../Context';
import Request from './../Request';

import { Button, CircularProgress, TextField, FormControl, InputLabel, OutlinedInput, InputAdornment, IconButton } from '@mui/material';
import { Visibility, VisibilityOff } from '@mui/icons-material';


class Login extends Component {     
    static contextType = Context;

    constructor(props, context) {
        super(props, context)

        this.state = {
            username: '',
            password: '',
            showPassword: false,
            error: false,
            loading: false
        };

        this.validation = { 
            username: [''],
            password: [''],
        }
    };

    _onChange = (e) => {
        this.setState({[e.target.name]: e.target.value, [`${e.target.name}ErrorMessage`]: null});
    }

    _getToken = () => {

        const { username, password } = this.state;

        let hasErrors = false;
        this.setState({ loading: true });

        Object.keys(this.validation).forEach(k => {
            if (this.validation[k].includes(this.state[k])) {
                this.setState({[`${k}ErrorMessage`]: `${k} cannot be empty.`})
                hasErrors = true;
            }
        });

        if (hasErrors) {
            this.setState({ loading: false });
            return;
        }

        Request.post({ url: "/auth/login" }, { username, password })
            .fail((response) => {
                this.setState({ error: response?.responseJSON?.error || true, loading: false }); 
            })
            .done((e) => {
                this.setState({ error: false });
                this._setSession(e);
            });
    };

    _setSession = (response) => {

        sessionStorage.setItem('token', response.token);

        this.props.setTokenExpiration(true);
    
    }

    render() {

        const { username, password, showPassword, error, loading, usernameErrorMessage, passwordErrorMessage } = this.state;

        //of course we can have different messages here depending on type of error
        const errorMessage = `No password match for ${username}`;

        return (
            <React.Fragment>

                        <TextField
                            autoFocus
                            error ={usernameErrorMessage && usernameErrorMessage.length !== 0 ? true : false }
                            id="outlined-required"
                            label={_.capitalize(this.state.usernameErrorMessage || "Username")}
                            name="username"
                            value={username}
                            onChange={this._onChange}
                        />

                        <FormControl variant="outlined">

                            <InputLabel 
                                error={passwordErrorMessage ? true : false} 
                                htmlFor="outlined-adornment-password">
                                    {_.capitalize(passwordErrorMessage || "Password")}
                            </InputLabel>

                                <OutlinedInput
                                    id="outlined-adornment-password"
                                    type={showPassword ? 'text' : 'password'}
                                    value={password}
                                    name="password"
                                    error={passwordErrorMessage && passwordErrorMessage.length !== 0 ? true : false }
                                    onChange={this._onChange}
                                    endAdornment={
                                        <InputAdornment position="end">
                                            <IconButton
                                                aria-label="toggle password visibility"
                                                onClick={() => this.setState({showPassword: !this.state.showPassword})}
                                                onMouseDown={(e) => event.preventDefault()}
                                                edge="end" >
                                            {showPassword ? <VisibilityOff /> : <Visibility />}
                                            </IconButton>
                                      </InputAdornment>
                                    }
                                />
                        </FormControl>

                    
                    {!loading &&
                        <Button className="login-button" color="primary" size="large" onClick={() => this._getToken()} >
                            {("Login").toUpperCase()}
                        </Button>
                    }
                    {loading &&
                        <Button className="login-button" color="primary" size="large" disabled >
                            <CircularProgress disableShrink size={18} className={"button-progress"} />
                        </Button>
                    }

            </React.Fragment>
        );
    }
}

export default Login;