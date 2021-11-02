import React, { Component } from "react";
import { Context } from '../Context';

import { Button, Link } from "@mui/material";

class ErrorView extends Component {

    static contextType = Context;

    constructor(props, context) {
        super(props, context);
    }

    goBack(e, lastView) {
        this.props.clearError && this.props.clearError();
        if (!e.ctrlKey && !e.metaKey && this.props.updateView) {
            e.preventDefault();
            this.props.updateView(lastView);
        }
    }

    urlHandler(view) {
        let url = "index.php?";
        let first = true;

        Object.keys(view).forEach((key) => {
            if (first) url += key + "=" + view[key];
            else url += "&" + key + "=" + view[key];

            first = false;
        });

        return url;
    }

    render() {
        const {errorTime, errorMessage, clearError } = this.props
        const lastView = localStorage.lastView ? JSON.parse(localStorage.lastView) : undefined;

        return (
            <React.Fragment>
                <div id="error-view">
                    <div className={`center-wrapper ${className}`}>
                        {errorTime && errorMessage && 
                            <p> 
                                <span>Something happened at:</span> {errorTime} {errorMessage}
                            </p>
                        }

                        <Button onClick={() => clearError()} size="large">try again</Button>
                        
                        <br />
                        
                        {lastView && (
                            <React.Fragment>
                                <Link 
                                    href={this.urlHandler(lastView)} 
                                    onClick={(e) => this.goBack(e, lastView)} >
                                    Go back
                                </Link>
                            </React.Fragment>
                        )}
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default ErrorView;
