<template>
  <div class="container p-5">
    <div class="row row-cols-4">
      <!-- trasformare in componente  -->
      <div v-for="movie in movies" :key="movie.id" class="col mb-4 position-relative">
        <!-- dichiarare nullable img e usare vif per mostrare quando è presente -->
        <div class="card h-100" style="width: 18rem;">
          <img :src="movie.cover" class="card-img-top" alt="{{ movie.title }}">
          <div class="card-body" style="height: 18rem;">
            <h3 class="fw-bold">{{ movie.name }}</h3>
            <h6 class="fw-bold">Genre : {{ movie.genre.name }}</h6>
            <div class="card-text py-3" style="max-height: 10rem; overflow-y: auto;">{{ movie.description }}</div>
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
