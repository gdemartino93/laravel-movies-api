<template>
    <div class="container">
        <form action="" class="col-12 col-md-8 col-lg-4 mx-auto py-4">
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
            <button class="btn btn-success" type="submit">Add </button>
            

        </form>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>