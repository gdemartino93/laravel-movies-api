<template>
  <div v-for="movie in movies">
<span class="text-danger">asd</span>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import useMovies from '../../composable/movies';
const { movies , getMovies} = useMovies();



onMounted(()=>{
  getMovies()
})

console.log(movies.value)




</script>

<style lang="scss" scoped>

</style>
