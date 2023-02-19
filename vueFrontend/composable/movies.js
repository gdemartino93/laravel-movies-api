import axios from "axios";
import { ref } from "vue";

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/v1/';

export default function useMovies(){

    const movies = ref([]);
    const genres = ref([]);


    const getMovies = () =>{
        axios.get('')
            .then(res => {
                movies.value = res.data.movies
            })
    }
    
    // get the genre to create LI in the store page
    const getGenreList = () => {
        axios.get('movie/create')
            .then(res =>{
                genres.value = res.data.genres;
            })
            .catch(err => console.log(err))
    }
    

    return {
        movies,
        getMovies,
        genres,
        getGenreList
    }
}