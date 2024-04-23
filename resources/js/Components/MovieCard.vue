<script setup>
defineProps(['movie']);
</script>

<template>
    <a class="flex flex-col mb-2 md:flex-row bg-base-300 shadow-xl" :href="route('movie', movie.id)">
        <div class="md:w-1/3">
            <figure>
                <img :src=movie.poster alt="Movie" class="w-full h-auto">
            </figure>
        </div>
        <div class="md:w-2/3 p-4">
            <h1 class="text-3xl mb-2" v-html="movie.title + ' ' + movie.year"></h1>
            <p class="mb-2"><b>Director</b>: Denis Villeneuve</p>
            <p class="mb-2"><b>Writers</b>: Jon Spaihts, Denis Villeneuve, Eric Roth</p>
            <p class="mb-2"><b>Producers</b>: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</p>
            <p class="mb-2"><b>Cast</b>: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista,
                Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</p>
        </div>
    </a>
</template>