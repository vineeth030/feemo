<script setup>
    defineProps({
        post: {
            type: Object,
            required: true
        }
    })
</script>

<template>
    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
        <th v-if="post.content_type == 'App\\Models\\TextPost'" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" v-text="post.content.text_content.substring(0, 50)"></th>
        <th v-if="post.content_type == 'App\\Models\\VideoPost'" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" v-text="post.content.url"></th>
        <td class="px-6 py-4" v-text="post.movie.title"></td>
        <td class="px-6 py-4" v-text="post.content_type"></td>
        <td class="px-6 py-4" v-text="post.user.name"></td>
        <td class="px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        </td>
    </tr>
</template>