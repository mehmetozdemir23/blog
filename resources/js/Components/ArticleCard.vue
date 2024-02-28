<template>
    <article class="flex flex-col p-6 bg-white rounded-lg border border-gray-200 shadow-md">
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold inline-flex items-center px-2.5 py-0.5 rounded">
                # {{ article.category }}
            </span>
            <span class="text-sm">{{ article.created_at }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ article.title }}
        </h2>
        <p class="mb-5 font-light text-gray-500  truncate w-[36rem] lg:w-[30rem]">{{ article.content }}
        </p>
        <div class="mt-auto flex justify-between items-center">
            {{ article.author.name }}
            <Link :href="route('articles.show', article)"
                class="inline-flex items-center font-semibold text-blue-600  hover:underline">
            Read more
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            </Link>
        </div>
    </article>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    article: Object
});
</script>