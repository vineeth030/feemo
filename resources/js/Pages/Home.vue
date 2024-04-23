<script>
import { ref, computed } from 'vue';
import MovieCard from '@/Components/MovieCard.vue';
import { Head, Link } from '@inertiajs/vue3';

export default {

    components: {
        MovieCard,
        Head,
        Link
    },

    props: {
        movies: {
            type: Object,
            required: true
        }
    },
    setup(props) {
        
        const movieName = ref('');

        const filteredMovies = computed(() => {
            return props.movies.filter((movie) => {
                return movie.title.toLowerCase().includes(movieName.value.toLowerCase());
            });
        });

        return {
            movieName,
            filteredMovies
        }
    }
}

</script>

<template>

    <Head title="Updates on your favourite movies" />

    <div class="flex justify-center items-center v-screen">
        <div class="max-w-2xl p-4 rounded-lg" style="width: 700px;">

            <a class="card w-full mb-2 bg-base-300 shadow-sm" :href="route('home')">
                <div class="card-body">
                    <h1 class="card-title text-5xl"><p class="font-sans text-center">Feemo</p></h1>
                </div>
            </a>

            <div class="card w-full mb-2 bg-base-300 shadow-sm">
                <input class="input input-bordered w-full" type="text" name="search" v-model="movieName" id="search" placeholder="Search for your favourite movies here">
            </div>

            <MovieCard v-for="movie in filteredMovies" :key="movie.id" :movie="movie" />

            <a class="card w-full mt-2 bg-base-300 shadow-sm" :href="route('team')">
                <div class="card-body">
                    <h2 class="card-title text-2xl"><p class="text-center">About Us</p></h2>
                </div>
            </a>
            
        </div>
    </div>

</template>