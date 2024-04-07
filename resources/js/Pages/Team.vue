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

    <Head title="Dune" />

    <div class="flex justify-center items-center v-screen">
        <div class="max-w-2xl p-4 rounded-lg" style="width: 700px;">

            <a class="card w-full mb-2 bg-base-300 shadow-sm" :href="route('home')">
                <div class="card-body">
                    <h1 class="card-title text-5xl"><p class="font-sans text-center">Feemo</p></h1>
                </div>
            </a>

            <a class="card w-full mt-2 bg-base-300 shadow-sm" :href="route('team')">
                <div class="card-body">
                    <h2 class="card-title text-2xl"><p class="text-center">About Us</p></h2>
                </div>
            </a>

            <div class="card w-full mt-2 bg-base-200 shadow-sm">
                <div class="card-body">
                    <p># Midhun, the design guy</p>
                    <p># Vineeth, the programing guy</p>
                    <p># Manoj, the movie expert</p>
                    <p># Maneesha, the quality expert</p>
                </div>
            </div>
            
        </div>
    </div>

</template>