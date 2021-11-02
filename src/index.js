import React from 'react';
import ReactDOM from 'react-dom';
import Main from './Main';
import ErrorBoundary from './error/ErrorBoundary';

ReactDOM.render(<ErrorBoundary><Main /></ErrorBoundary>, document.getElementById('assignment'));
