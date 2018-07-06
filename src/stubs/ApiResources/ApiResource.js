import axios from "axios";

export default class ApiResource {

    constructor() {
        this.baseuri = window.appVars.apiUrl;
        this.axios = axios;
        this.axios.defaults.headers.common = {
            'X-CSRF-TOKEN'    : window.appVars.csrfToken,
            'X-Requested-With': 'XMLHttpRequest'
        };
    }

    get(uri) {
        return this.axios.get(this.baseuri + uri).catch(errors => this.catch(errors));
    }

    post(uri, data) {
        return this.axios.post(this.baseuri + uri, data).catch(errors => this.catch(errors));
    }

    put(uri, data) {
        return this.axios.put(this.baseuri + uri, data).catch(errors => this.catch(errors));
    }

    patch(uri, data) {
        return this.axios.patch(this.baseuri + uri, data).catch(errors => this.catch(errors));
    }

    delete(uri) {
        return this.axios.delete(this.baseuri + uri).catch(errors => this.catch(errors));
    }


    /**
     * this catch if for erro debugging use dd() in the backend to see it reflected here
     * also any 500 errors will end up being displayed here.
     * @param errors
     */
    catch(errors) {
        //for die and dump purposes
        console.log(errors.response);

        let data = errors.response.data;
        let content = '';
        if(typeof data === 'string') {
            content = data;
        }
        else {
            for(let property in data) {
                content += '<b>'+property + '</b>' + ': ' + data[property] + '<br>';
            }
        }

        document.body.innerHTML = content;
    }
}