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
                <input class="form-control" type="text" name="tipo" readonly v-model="category.name">
            </div>
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" class="form-control" name="title" required autofocus v-model="post.title">
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <textarea type="text" class="form-control" name="descripcion" rows="8" required v-model="post.description"></textarea>
            </div>
            <div class="form-group">
                <label for="file">Añadir imagen/es</label><br>
                <input type="file" id="file" multiple>
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
    import toastr from 'toastr';

    export default {
        props: {
            category:{
                id:'category.id',
                name:'category.name'
            }
        },
        data(){
            return{
                post: {title:'', description: ''}
            }
        },
        methods:{
            addPost: function(){
                var urlPosts = '/posts';
                axios.post(urlPosts,{
                    'category':this.category.id,
                    'title':this.post.title,
                    'description':this.post.description
                })
                .then(response =>{
                    this.post = [],
                    this.category = {},
                    location.href = '/',
                    alert('La petición ha sido registrada correctamente')
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