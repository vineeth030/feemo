<script setup>
defineProps({
    post: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <div class="card w-full mt-2 bg-base-300 shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-sm"></h2>
            <p v-text="post.content.text_content"></p>
            <div class="card-footer flex justify-between text-sm">
                <span>Views 5k</span>
                <span>17 Sept 2020</span>
            </div>
        </div>
    </div>
</template>