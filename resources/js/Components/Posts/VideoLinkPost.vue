<script setup>
defineProps({
    post: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <div class="card w-full h-auto mt-2 bg-base-300 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-sm pb-2">Watch the offical trailer of Dune released by Warner Brothers on
                youtube</h2>
            <div class="relative w-full" style="height: 0; padding-top: 56.25%;">
                <iframe :src="post.content.url" class="absolute inset-0 w-full h-full"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-footer flex justify-between text-sm">
                <span>Views 10k</span>
                <span>09 Sept 2020</span>
            </div>
        </div>
    </div>
</template>