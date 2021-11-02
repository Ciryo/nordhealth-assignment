import React, { Component } from "react";

import { Context } from '../Context';
import ErrorView from "./ErrorView";

class ErrorBoundary extends React.Component {
    
    static contextType = Context;

    constructor(props, context) {
        super(props, context);
        this.state = { hasError: false, errorTime: "", errorMessage: "" };
    }

    static getDerivedStateFromError(error) {
        return { hasError: true };
    }

    componentDidCatch(error, errorInfo) {

        //here we could log error or specify message to user
        this.setState({ errorTime: response, errorMessage: error.stack});
    }

    clearError = () => {
        this.setState({ hasError: false });
    }


    render() {
        if (this.state.hasError) {
            const errorProps = {...this.state, clearError: this.clearError, updateView: this.props.updateView};
            
            return <ErrorView {...errorProps} />
        }

        return this.props.children;
    }
}

export default ErrorBoundary;
