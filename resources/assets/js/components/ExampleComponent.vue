<template>
    <div class="row justify-content-center">
        <!--Espacio en blanco-->
        <div class="col-12">&nbsp;</div>
        <div class="col-6">
            <h3>Nueva petición</h3>
            <div class="col-12">&nbsp;</div>
            <form @submit.prevent="addPost" method="post">
                <div class="form-group">
                    <label for="">Categoria de Petición</label>
                    <input class="form-control" type="text" name="tipo" v-model="category">
                </div>
                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control" name="title" required autofocus v-model="title">
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea type="text" class="form-control" name="descripcion" rows="8" required v-model="description"></textarea>
                </div>
                
                <br>
                <div class="form-group">
                    <button class="btn btn-primary">Crear petición</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        created(){
            this.addPosts();
        },
        data(){
            return{
                post: {category: '', title:'', description: ''}
            }
        },
        methods:{
            addPost: function(){
                var urlPosts = '/posts';
                axios.post(urlPosts,{
                    'category': this.category,
                    'title': this.title,
                    'description': this.description,
                }).then(response =>{
                    this.category='',
                    this.title='',
                    this.description="",
                    alert('Petición creada');
                });
                console.log(this.post);
            }
        }
    }
</script>