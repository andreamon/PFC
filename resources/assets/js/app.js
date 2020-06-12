import Vue from 'vue';
import VuePaginate from 'vue-paginate';
Vue.use(VuePaginate);

import ExampleComponent from './components/ExampleComponent';
import ListComponent from './components/ListComponent';
import CreateComponent from './components/CreateComponent';
import PaginateComponent from './components/PaginateComponent'
import Item from './components/Item'

const app = new Vue({
    el: '#app',
    components: {
        Item,
        ExampleComponent,
        ListComponent,
        "create": CreateComponent,
        "page": PaginateComponent
    },
});
