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

            <div class="card card-side w-full bg-base-300 shadow-xl">
                <figure><img :src=moviePoster style="height: 300px;" alt="Movie" /></figure>
                <div class="card-body pt-4 max-w-md">
                    <h1 class="card-title text-3xl pt-0">Dune 2021</h1>
                    <span>Director: Denis Villeneuve</span>
                    <span>Writers: Jon Spaihts, Denis Villeneuve, Eric Roth</span>
                    <span>Producers: Denis Villeneuve, Mary Parent, Cale Boyter, Joseph Caracciolo Jr.</span>
                    <span>Cast: Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin, Stellan Skarsgård, Dave
                        Bautista, Zendaya, Jason Momoa, Javier Bardem, Charlotte Rampling</span>
                </div>
            </div>

            <div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-sm pb-2">Watch the offical trailer of Dune released by Warner Brothers on
                        youtube</h2>
                    <div class="relative w-full" style="height: 0; padding-top: 56.25%;">
                        <iframe src="https://www.youtube.com/embed/n9xhJrPXop4" class="absolute inset-0 w-full h-full"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 10k</span>
                        <span>09 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-300 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review and ratings of Dune by Rotten tomatoes </h2>
                    <p><a class="text-xs"
                            href="https://www.rottentomatoes.com/m/dune_2021">https://www.rottentomatoes.com/m/dune_2021</a>
                    </p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 2k</span>
                        <span>15 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-300 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review by Paul Makartte </h2>
                    <p>
                        When the anticipation is feverish, it sets up movies to disappoint and fail. This long-awaited
                        movie smashes those expectations.</p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 5k</span>
                        <span>17 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-sm pb-2">Dune director Denis Villeneuve on adapting Frank Herbert's notoriously unfilmable sci-fi epic</h2>
                    <div class="relative w-full" style="height: 0; padding-top: 56.25%;">
                        <iframe src="https://www.youtube.com/embed/Wx0SALW3qF8" class="absolute inset-0 w-full h-full"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 1k</span>
                        <span>21 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-200 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review by Manoj Nilamboor </h2>
                    <p>
                        When the anticipation is feverish, it sets up movies to disappoint and fail. This long-awaited
                        movie smashes those expectations.</p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 3k</span>
                        <span>22 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-200 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review by Midhun Vijayan </h2>
                    <p>
                        When the anticipation is feverish, it sets up movies to disappoint and fail. This long-awaited
                        movie smashes those expectations.</p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 7k</span>
                        <span>27 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-200 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review by Vineeth Vijayan </h2>
                    <p>
                        When the anticipation is feverish, it sets up movies to disappoint and fail. This long-awaited
                        movie smashes those expectations.</p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 4k</span>
                        <span>28 Sept 2020</span>
                    </div>
                </div>
            </div>

            <div class="card w-full mt-2 bg-base-200 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-sm">Review by Maneesha N </h2>
                    <p>
                        When the anticipation is feverish, it sets up movies to disappoint and fail. This long-awaited
                        movie smashes those expectations.</p>
                    <div class="card-footer flex justify-between text-sm">
                        <span>Views 9k</span>
                        <span>28 Sept 2020</span>
                    </div>
                </div>
            </div>

            

            
        </div>
    </div>

</template>