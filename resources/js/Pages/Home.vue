<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    moviePoster: {
        type: String,
        required: true
    }
});

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
                <div class="card-body">
                    <input class="input input-bordered w-full" type="text" name="search" id="search" placeholder="Search for your favourite movies here">
                </div>
            </div>

            <a class="flex flex-col mb-2 md:flex-row bg-base-300 shadow-xl" :href="route('movie')">
                <div class="md:w-1/3">
                    <figure>
                    <img :src=moviePoster alt="Movie" class="w-full h-auto">
                    </figure>
                </div>
                <div class="md:w-2/3 p-4">
                    <h1 class="text-3xl">Dune 2021</h1>
                    <p>Director: Denis Villeneuve</p>
                    <p>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</p>
                    <p>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</p>
                    <p>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</p>
                </div>
            </a>
            
            <a class="flex flex-col mb-2 md:flex-row bg-base-300 shadow-xl" :href="route('movie')">
                <div class="md:w-1/3">
                    <figure>
                    <img :src=moviePoster alt="Movie" class="w-full h-auto">
                    </figure>
                </div>
                <div class="md:w-2/3 p-4">
                    <h1 class="text-3xl">Dune 2021</h1>
                    <p>Director: Denis Villeneuve</p>
                    <p>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</p>
                    <p>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</p>
                    <p>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</p>
                </div>
            </a>

            <a class="flex flex-col mb-2 md:flex-row bg-base-300 shadow-xl" :href="route('movie')">
                <div class="md:w-1/3">
                    <figure>
                    <img :src=moviePoster alt="Movie" class="w-full h-auto">
                    </figure>
                </div>
                <div class="md:w-2/3 p-4">
                    <h1 class="text-3xl">Dune 2021</h1>
                    <p>Director: Denis Villeneuve</p>
                    <p>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</p>
                    <p>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</p>
                    <p>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</p>
                </div>
            </a>

            <a class="card w-full mt-2 bg-base-300 shadow-sm" :href="route('team')">
                <div class="card-body">
                    <h2 class="card-title text-2xl"><p class="text-center">About Us</p></h2>
                </div>
            </a>
            
        </div>
    </div>

</template>