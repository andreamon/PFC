
// require('./bootstrap');

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    created: function(){
        this.getPosts();
    },
    data: {
        posts: [],
    },
    methods: {
        getPosts: function(){
            var urlPosts = '/posts';
            axios.get(urlPosts).then(response =>{
                this.posts = response.data
            });
        },
        deletePosts: function(post){
            var urlPosts = '/posts';
            axios.delete(urlPosts).then(response =>{
                this.getPosts();
                toastr.success('Eliminado correctamente');
            });
        }
    }
});
