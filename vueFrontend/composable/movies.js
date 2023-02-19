import axios from "axios";
import { ref } from "vue";

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/v1/';

export default function useMovies(){

    const movies = ref([]);

    const getMovies = () =>{
        axios.get('')
            .then(res => {
                movies.value = res.data.movies
            })
    }

    return {
        movies,
        getMovies
    }
}