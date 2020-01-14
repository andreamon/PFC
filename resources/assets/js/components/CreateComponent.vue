<template>
<div class="row justify-content-center">
    <!--Espacio en blanco-->
    <div class="col-12">&nbsp;</div>
    <div class="col-6">
        <h3>Nueva petición</h3>
        <div class="col-12">&nbsp;</div>
        <form action="" @submit.prevent="addPost" method="post">
            <div class="form-group">
                <label for="">Tipo de Petición</label>
                <input class="form-control" type="text" name="tipo" readonly v-model="category">
            </div>
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" class="form-control" name="title" required autofocus v-model="post.title">
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <textarea type="text" class="form-control" name="descripcion" rows="8" required v-model="post.description"></textarea>
            </div>
            
            <br>
            <div class="form-group">
                <button type="submit" :disabled="!isValid" class="btn btn-primary btn-block">Guardar</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>
    import axios from 'axios';

    export default {
        props: ['category'],
        data(){
            return{
                post: {title:'', description: ''}
            }
        },
        methods:{
            addPost: function(){
                var urlPosts = '/posts';
                axios.post(urlPosts,this.post)
                .then(response =>{
                    this.post = [],
                    location.href = '/'
                });
                console.log(this.post);
            }
        },
        computed:{
            isValid() {
                    return this.post.title !== '' && this.post.description !== ''
                }
        }
    }
</script>