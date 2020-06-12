<template>
  <div class="row justify-content-center">
    <div class="col-6">
      <h3>Nueva petición</h3>
      <div class="col-12">&nbsp;</div>
      <form action @submit.prevent="addPost" method="post">
        <div class="form-group">
          <label for>Tipo de Petición</label>
          <input class="form-control" type="text" name="tipo" readonly v-model="category.name" />
        </div>
        <div class="form-group">
          <label for>Título</label>
          <input
            type="text"
            class="form-control"
            name="title"
            required
            autofocus
            v-model="post.title"
          />
        </div>
        <div class="form-group">
          <label for>Descripción</label>
          <textarea
            type="text"
            class="form-control"
            name="descripcion"
            rows="5"
            required
            v-model="post.description"
          ></textarea>
        </div>
        <div id="upload-img">
          <button type="button" class="btn btn-link" v-on:click="addFiles()">Seleccionar imágenes</button>
          <input type="file" ref="files" id="files" multiple @change="uploadFiles()" />
          <!-- <button type="button" class="btn btn-success" @click="submitFiles()">Subir imagenes</button> -->

          <div v-for="(file, key) in files" :key="file.key" class="file-listing">
            <img class="preview" v-bind:ref="'preview'+parseInt( key )" />
            {{ file.name }}
            <div class="remove-container">
              <a class="remove" v-on:click="removeFile(key)">Eliminar imagen</a>
            </div>
          </div>
        </div>
        <!-- <div class="form-group">
          <label for="file">Añadir imagen/es</label>
          <br />
          <input type="file" id="file" multiple />
        </div> -->

        <br />
        <div class="form-group">
          <button type="submit" :disabled="!isValid" class="btn btn-primary btn-block">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import toastr from "toastr";
import Swal from 'sweetalert2';

export default {
  props: {
    category: {
      id: "category.id",
      name: "category.name"
    }
  },
  data() {
    return {
      files: [],
      post: { title: "", description: "" }
    };
  },
  methods: {
    addFiles() {
      this.$refs.files.click();
    },
    removeFile(key) {
      this.files.splice(key, 1);
    },
    uploadFiles() {
      let uploadedFiles = this.$refs.files.files;
      // console.log(uploadedFiles);

      for (var i = 0; i < uploadedFiles.length; i++) {
        uploadedFiles[i].key =
          new Date().getTime().toString() + Math.ceil(Math.random() * 100);
        this.files.push(uploadedFiles[i]);
      }
      this.getImagePreviews();
    },
    getImagePreviews() {
      for (let i = 0; i < this.files.length; i++) {
        if (/\.(jpe?g|png|gif)$/i.test(this.files[i].name)) {
          let reader = new FileReader();
          reader.addEventListener(
            "load",
            function() {
              this.$refs["preview" + parseInt(i)][0].src = reader.result;
            }.bind(this),
            false
          );
          reader.readAsDataURL(this.files[i]);
        } else {
          this.$nextTick(function() {
            this.$refs["preview" + parseInt(i)][0].src = "/images/file.png";
          });
        }
      }
      // console.log(this.files);
    },
    // addPost: function() {
    //   var urlPosts = "/posts";
    //   axios
    //     .post(urlPosts, {
    //       category: this.category.id,
    //       title: this.post.title,
    //       description: this.post.description
    //     })
    //     .then(response => {
    //       (this.post = []),
    //         (this.category = {}),
    //         (location.href = "/"),
    //         alert("La petición ha sido registrada correctamente");
    //     });
    //   console.log(this.post);
    // },
    addPost() {
      let formData = new FormData();
      for (var i = 0; i < this.files.length; i++) {
        let file = this.files[i];
        formData.append("files[" + i + "]", file);
      }
      formData.append("category", this.category.id);
      formData.append("title", this.post.title);
      formData.append("description", this.post.description);

      console.log(formData);
      const config = {
        headers: {
          "Content-Type": "multipart/form-data"
        }
      };
      var urlPosts = "/posts";
      axios
        .post(urlPosts, formData, config)
        .then(response => {
          (this.files = []),
          (this.post = {}),
          (this.category = {})
          Swal.fire({
            position: "center",
            icon: "success",
            title: "La petición ha sido registrada correctamente",
            showConfirmButton: false,
            timer: 5000
          }),
          (location.href = "/");
        })
        .catch(function() {
          console.log("NO SE HAN PODIDO SUBIR LOS ARCHIVOS");
          Swal.fire({
            icon: "error",
            title: "Falló",
            text: "Ha ocurrido un error"
          });
        });
    }
  },
  computed: {
    isValid() {
      return this.post.title !== "" && this.post.description !== "";
    }
  }
};
</script>
<style>

input[type="file"] {
  position: absolute;
  top: -500px;
}
div.file-listing {
  width: 200px;
  /* margin: auto;
  padding: 10px; */
  /* border-bottom: 1px solid #ddd; */
}
div.file-listing img {
  height: 100px;
}
#upload-img {
  padding: 2rem 0.5rem;
}
div.remove-container {
  text-align: center;
  color: red;
  cursor: pointer;
}
</style>