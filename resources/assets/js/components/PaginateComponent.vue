<template>
  <div class="col-10 table-responsive mt-5">
    <table class="table">
      <paginate name="posts" :list="posts" :per="4" tag="tbody">
        <tr v-for="post in paginated('posts')" :key="post.id">
          <div class="card" id="card-post">
            <div class="card-body">
              <strong>{{post.category}}</strong>
              <div>&nbsp;</div>
              <p>{{post.title}}</p>
              <p class="text-muted">
                <small>Realizado por {{post.user}}</small>
                <small v-if="post.created != null">el {{ getDate(post.created.date)}}</small>
              </p>
              <view-detail :id="post.id" />
            </div>
          </div>
        </tr>
      </paginate>
      <paginate-links
        for="posts"
        :hide-single-page="true"
        :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"
      ></paginate-links>
    </table>
  </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
import ViewDetail from "./ViewDetail";

export default {
  components: {
    "view-detail": ViewDetail
  },
  created() {
    this.getPosts();
  },
  data() {
    return {
      posts: [],
      paginate: ["posts"]
    };
  },
  methods: {
    getDate: function(date) {
      return moment(date, "YYYY-MM-DD").format("DD/MM/YYYY");
    },
    getPosts: function() {
      var urlPosts = "/posts";
      axios.get(urlPosts).then(response => {
        this.posts = response.data;
      });
    }
  }
};
</script>

<style scoped>
/* .icon {
  display: flex;
  align-items: center;
  text-decoration: none;
  cursor: pointer;
} */
.card:hover {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25), 0 5px 10px rgba(0, 0, 0, 0.1);
  transform: translateY(-1px) translateZ(-1px);
  cursor: pointer;
}
.card {
  margin: 5px;
  border-radius: 5px;
  border-style: solid;
  border-width: 2px;
  background-color: #fff;
  border-color: #f8f8f8;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.8s cubic-bezier(0.25, 0.8, 0.25, 1);
}
/* .card {
  margin: 5px;
  box-shadow: 0 0 1px 0 rgba(8, 11, 14, 0.06),
    0 16px 16px -1px rgba(8, 11, 14, 0.1);
  border-radius: 5px;
  border: 1px solid #f7f8f9;
} */
</style>