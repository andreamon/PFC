<template>
  <a :href="url" class="btn btn-link icon" data-toggle="tooltip" title="Ver más">
    <i class="fas fa-eye"></i>&nbsp;Detalles
  </a>
</template>

<script>
export default {
  props: ["id"],
  data(){
      return{
          url: '/posts/'+this.id
      }
  }
};
</script>