<template>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl">
                <Link :href="route('articles.index')" class="flex items-center text-sm text-gray-600">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m14 18l-6-6l6-6l1.4 1.4l-4.6 4.6l4.6 4.6z" />
                </svg>
                Back
                </Link>

                <header class="mt-6 mb-4 lg:mb-6">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                :alt="article.author.name">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{
                                    article.author.name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate="" datetime="2022-02-08"
                                        title="February 8th, 2022">{{ article.created_at }}</time></p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ article.title }}
                    </h1>
                </header>
                <img :src="article.image" alt="article image">
                <p class="mt-4 text-lg text-gray-700">{{ article.content }}</p>


            </article>
        </div>
    </main>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    article: Object
});
</script>
