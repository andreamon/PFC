<template>
  <div class="col-10 table-responsive mt-5">
    <table class="table table-hover table-sprite">
      <paginate name="posts" :list="posts" :per="3" tag="tbody">
        <tr v-for="post in paginated('posts')" :key="post.id">
          <td>
            <strong>{{post.category}}</strong>
            <div>&nbsp;</div>
            <p>{{post.title}}</p>
            <p class="text-muted">
              <small>Realizado por {{post.user}}</small>
              <small v-if="post.created != null">el {{ getDate(post.created.date)}}</small>
            </p>
          </td>
          <td style="vertical-align: inherit;">
            <view-detail :id="post.id" />
          </td>
        </tr>
      </paginate>
      <paginate-links
        for="posts"
        :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"
      ></paginate-links>
    </table>
  </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
import ViewDetail from './ViewDetail';

export default {
  components:{
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
.icon {
  display: flex;
  align-items: center;
  text-decoration: none;
  cursor: pointer;
}
</style>