<script setup>
import TextPost from '@/Components/Posts/TextPost.vue';
import VideoLinkPost from '@/Components/Posts/VideoLinkPost.vue';

defineProps({
    post: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <TextPost v-if="post.content_type == 'App\\Models\\TextPost'" :post="post" />
    <VideoLinkPost v-if="post.content_type == 'App\\Models\\VideoPost'" :post="post" />
</template>