import React from 'react';

//here we store most of static globally used data. A good place to have locales, rights etc. defined

export const defaultContext = {
    user: {
        userId: 1,
        firstName: '',
        lastName: ''
    },
    globals: {
        companyName: '',
        currency: 'EUR'
    },
    defaultViews: ['products'],
    functions: {
        updateView: () => {},
        presentCurrency: (value, currency, numberFormat) => {
            const response = new Intl.NumberFormat(numberFormat, {
                style: 'currency',
                currency: currency,
                currencyDisplay: 'symbol'
            }).format(value);
     
            return response;
        },
        checkRights: (target, permission) => {

            const currentRights = JSON.parse(sessionStorage.rights);

            if (!currentRights)
                return false;

            return currentRights[permission];
        }        
    }
}

export const Context = React.createContext(defaultContext);