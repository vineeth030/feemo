<script setup>
import Posts from '@/Components/Posts.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    movie: {
        type: Object,
        required: true
    }
});

</script>

<template>

    <Head :title="movie.title" />

    <div class="flex justify-center items-center v-screen">
        <div class="max-w-2xl p-4 rounded-lg" style="width: 700px;">

            <a class="card w-full mb-2 bg-base-300 shadow-sm" :href="route('home')">
                <div class="card-body">
                    <h1 class="card-title text-5xl"><p class="font-sans text-center">Feemo</p></h1>
                </div>
            </a>

            <div class="flex flex-col md:flex-row bg-base-300 shadow-xl">
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
            </div>
            
            <Posts v-for="post in movie.posts" :key="post.id" :post="post" />
            

            <!-- <div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
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
            </div> -->

            <!-- <div class="card w-full mt-2 bg-base-300 shadow-sm">
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
            </div> -->

            <!-- <div class="card w-full mt-2 bg-base-300 shadow-sm">
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
            </div> -->

            <!-- <div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
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
            </div><div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
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
            </div> -->
            
        </div>
    </div>

</template>