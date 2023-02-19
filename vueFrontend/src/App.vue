<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
  <header>
    <!-- <div class="container"> -->
      <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto gap-4">
            <RouterLink to="/">
              <li class="fw-bold fs-4 text-dark">Home</li>
            </RouterLink>
            <RouterLink to="/movies/create">
              <li class="fw-bold fs-4 text-dark">Create New</li>
            </RouterLink>
          </ul>
          <ul class="nav">
              <input type="search" name="" id="" class=" rounded-4 p-1">
              <button class="btn btn-success mx-3">Cerca</button>
          </ul>
        </div>


      </nav>
    <!-- </div> -->
  </header>

  <RouterView />
</template>

<style scoped>

</style>
