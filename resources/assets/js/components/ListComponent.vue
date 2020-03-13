<template>
    <div class="col-10 table-responsive mt-5">
    <table class="table table-hover table-sprite">
        <tbody>
            <tr v-for="post in posts" :key="post.id">
                <td>
                    <strong>{{post.category}}</strong>
                    <div>&nbsp;</div>
                    <p>{{post.title}}</p>
                    <p><small class="text-muted">Realizado por {{post.user}} el {{post.created}}</small></p>
                </td>
                <td style="vertical-align: inherit;">
                    <a style="display: flex; align-items: center;" href="#" class="btn btn-link" data-toggle="tooltip" title="Ver más">
                        Detalles&nbsp;<i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>
<script>
    import axios from 'axios';
    import toastr from 'toastr';
    import moment from 'moment';

    export default{
        created(){
            this.getPosts();
        },
        data() {
            return{
                posts: []
            }
        },
        methods: {
            since: function(d){
                return moment(d).format();
            },
            getPosts: function(){
                var urlPosts = '/posts';
                axios.get(urlPosts).then(response =>{
                    this.posts = response.data
                });
            },
        }
    }
</script>