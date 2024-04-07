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

            <a class="card card-side mb-2 w-full bg-base-300 shadow-xl" :href="route('movie')">
                <figure><img :src=moviePoster style="height: 310px;" alt="Movie" /></figure>
                <div class="card-body pt-4 max-w-md">
                    <h1 class="card-title text-3xl pt-0">Dune 2021</h1>
                    <span>Director: Denis Villeneuve</span>
                    <span>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</span>
                    <span>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</span>
                    <span>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave
                        Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</span>
                </div>
            </a>
            
            <a class="card card-side mb-2 w-full bg-base-300 shadow-xl" :href="route('movie')">
                <figure><img :src=moviePoster style="height: 310px;" alt="Movie" /></figure>
                <div class="card-body pt-4 max-w-md">
                    <h1 class="card-title text-3xl pt-0">Dune 2021</h1>
                    <span>Director: Denis Villeneuve</span>
                    <span>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</span>
                    <span>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</span>
                    <span>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave
                        Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</span>
                </div>
            </a>

            <a class="card card-side mb-2 w-full bg-base-300 shadow-xl" :href="route('movie')">
                <figure><img :src=moviePoster style="height: 310px;" alt="Movie" /></figure>
                <div class="card-body pt-4 max-w-md">
                    <h1 class="card-title text-3xl pt-0">Dune 2021</h1>
                    <span>Director: Denis Villeneuve</span>
                    <span>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</span>
                    <span>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</span>
                    <span>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave
                        Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</span>
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