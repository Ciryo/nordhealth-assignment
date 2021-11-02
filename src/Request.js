import $ from 'jquery';

const Request = {

    prefix: "",
    
    url: (params) => {
        
        let { url: url, ...p } = params;

        url = Request.prefix + url + (p ? `?&${$.param(p)}` : "");

        return url;
    },

    req: (method, params, data = undefined, json = false) => {

        const { token } = sessionStorage;

        const headers = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};

        const url = typeof params === "string" ? params : Request.url(params);

        const addedParams = {};
        if (json === true && params.url) {
            addedParams.contentType = "application/json; charset=utf-8";
            data = JSON.stringify(data);
        }        
        
        return $.ajax({
            url,
            data,
            headers,
            async: params.async || true,
            method: method,
            ...addedParams
        });
    },
    get: (params) => {
        return Request.req("GET", params);
    },
    post: (params, data) => {
        return Request.req("POST", params, data, true);
    },
    put: (params, data) => {
        return Request.req("PUT", params, data, true)
    },
    patch: (params, data) => {
        return Request.req("PATCH", params, data, true);
    },
    delete: (params, data) => {
        return Request.req("DELETE", params, data, true);
    },

    file: (params, file, success, complete) => {
        const { token } = storage;
        const headers = {[window.location.href.indexOf(':8181')  > -1 ? 'Authorization-assignment' : 'Authorization']: `Bearer ${token}`};
        
        let data = file;

        if (!(data instanceof FormData)) {
            data = new FormData();
            data.append("attachment", file);
        }

        return $.ajax({
            url: Request.url(params),
            type: 'POST',
            data,
            dataType: "json",
            processData: false,
            contentType: false,
            headers,
            success: success,
            complete: complete
        });

    }
};

export default Request;
