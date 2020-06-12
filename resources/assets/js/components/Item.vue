<template>
  <div class="col-12">
    <div id="item" class="card">
      <div class="row">
        <div class="col-md-9">
          <div class="card-body">
            <h4 class="card-title" v-text="this.post.title" />
            <div class="card-text">
              <p>{{this.post.description}}</p>
              <br />
              <p>Realizado por {{this.post.user}}</p>
              <p v-if="this.post.created != null">El {{ getDate(post.created.date)}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  props: ["id"],
  data() {
    return {
      post: {}
    };
  },
  mounted() {
    this.getInfo();
  },
  methods: {
    getInfo() {
      var urlPost = "/posts";
      axios
        .get(urlPost)
        .then(response => {
          this.post = response.data.find(item => item.id == this.id);
          console.log(this.post);
        })
        .catch(error => {
          console.log(error);
        });
    },
    getDate: function(date) {
      return moment(date, "YYYY-MM-DD").format("DD/MM/YYYY");
    }
  }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Gotu&display=swap");
#item {
  margin-top: 3rem;
  padding: 15px 15px 0px 15px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  border-top: transparent;
  border-right: transparent;
  font-family: "Gotu", sans-serif;
}
</style>