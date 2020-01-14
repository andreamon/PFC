
// require('./bootstrap');
// import 'bootstrap';

// window.Vue = require('vue');
import Vue from 'vue';

import ExampleComponent from './components/ExampleComponent';
import ListComponent from './components/ListComponent';
import CreateComponent from './components/CreateComponent';

const app = new Vue({
    el: '#app',
    components: { 
        ExampleComponent,
        "list": ListComponent,
        "create": CreateComponent
    },
});
