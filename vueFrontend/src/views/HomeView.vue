<template>
  <div class="container p-5">
    <div class="row row-cols-4">
      <div v-for="movie in movies" :key="movie.id" class="col mb-4 position-relative">
        <div class="card h-100" style="width: 18rem;">
          <img :src="movie.cover" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="fw-bold">{{ movie.name }}</h5>
            <p class="card-text">{{ movie.description }}</p>
            <div class="card position-absolute bottom-0">{{ movie.vote }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import useMovies from '../../composable/movies';
const { movies , getMovies} = useMovies();



onMounted(()=>{
  getMovies()
})

</script>

<style lang="scss" scoped>
*{
  color: black;
}
</style>
