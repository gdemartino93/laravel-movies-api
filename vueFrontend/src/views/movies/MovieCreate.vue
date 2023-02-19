<template>
    <div class="container">
        <form action="POST" class="col-12 col-md-8 col-lg-4 mx-auto py-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Cover</span>
                <input type="text" class="form-control" name="cover">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                <textarea  type="text-area" class="form-control" name="description" />
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Vote</span>
                <input type="number" class="form-control" min="0" max="5" name="vote">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Year</span>
                <input type="number" class="form-control" name="year">
            </div>
            <div class="input-group mb-3">
                <select name="genre_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Select genre:</option>
                    <option v-for="genre in genres" :value="genre.id">{{ genre.name }}</option>
                </select>
            </div>


            <button class="btn btn-success" type="submit">Add </button>


        </form>
    </div>
</template>

<script setup>
import useMovies from '../../../composable/movies';
import { onMounted } from 'vue';
const { genres , getGenreList } = useMovies();
onMounted(() => {
    getGenreList();
}),
console.log(genres);
</script>

<style lang="scss" scoped>

</style>