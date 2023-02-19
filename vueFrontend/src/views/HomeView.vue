<template>
  <div class="container p-5">
    <div class="row row-cols-4">
      <div v-for="movie in movies" :key="movie.id" class="col mb-4 position-relative">
        <div class="card h-100" style="width: 18rem;">
          <img :src="movie.cover" class="card-img-top" alt="{{ movie.title }}">
          <div class="card-body" style="height: 18rem;">
            <h3 class="fw-bold">{{ movie.name }}</h3>
            <h6 class="fw-bold">Genre : {{ movie.genre.name }}</h6>
            <p class="card-text">{{ movie.description }}</p>
          </div>
          <div class="bg-white border-0 card-footer d-flex justify-content-between align-items-center position-absolute bottom-0 w-100 p-3">
            <span>Vote: {{ movie.vote }}</span>
            <span>Year: {{ movie.year }}</span>
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
