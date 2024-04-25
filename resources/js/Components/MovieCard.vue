<script setup>
defineProps(['movie']);
</script>

<template>
    <a class="flex flex-col mb-2 md:flex-row bg-base-300 shadow-xl" :href="route('movie', movie.id)">
        <div class="md:w-1/3">
            <figure>
                <img :src="'/storage/posters/' + movie.poster" alt="Movie" class="w-full h-auto">
            </figure>
        </div>
        <div class="md:w-2/3 p-4">
            <h1 class="text-3xl mb-2" v-html="movie.title + ' ' + movie.year"></h1>
            <p class="mb-2"><b>Director</b>: <span v-for="director in movie.directors" :key="director.id" v-text="director.name"></span></p>
            <p class="mb-2"><b>Writers</b>: <span v-text="movie.writers.map(writer => writer.name).join(', ')"></span></p>
            <p class="mb-2"><b>Producers</b>: <span v-text="movie.producers.map(producer => producer.name).join(', ')"></span></p>
            <p class="mb-2"><b>Cast</b>: <span v-text="movie.cast.map(cast => cast.name).join(', ')"></span></p>
        </div>
    </a>
</template>