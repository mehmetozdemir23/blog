<template>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white  antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article class="mx-auto w-full max-w-2xl">
                <Link :href="route('articles.index')" class="flex items-center text-sm text-gray-600">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m14 18l-6-6l6-6l1.4 1.4l-4.6 4.6l4.6 4.6z" />
                </svg>
                Back
                </Link>

                <header class="mt-6 mb-4 lg:mb-6">
                    <div class="flex items-start justify-between mb-6">
                        <address class="flex items-center not-italic">
                            <div class="mr-3 text-sm text-gray-900">
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{
                                    article.author.name }}</a>
                                <p class="text-base text-gray-500"><time pubdate="" datetime="2022-02-08"
                                        title="February 8th, 2022">{{ article.created_at }}</time>
                                </p>
                            </div>
                        </address>
                        <div v-if="isAuthor" class="relative">
                            <button type="button" class="hover:bg-gray-200 p-2 rounded-full"
                                @click="menuActive = !menuActive">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                        d="M112 60a16 16 0 1 1 16 16a16 16 0 0 1-16-16m16 52a16 16 0 1 0 16 16a16 16 0 0 0-16-16m0 68a16 16 0 1 0 16 16a16 16 0 0 0-16-16" />
                                </svg>
                            </button>
                            <ul v-if="menuActive"
                                class="z-50 w-max absolute right-0 -bottom-2 translate-y-full shadow-lg shadow-gray-200 text-sm divide-y">
                                <li class="w-full">
                                    <Link :href="route('articles.edit', article)"
                                        class="flex items-center py-2 px-4 hover:bg-gray-200">
                                    <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M15.275 12.475L11.525 8.7L14.3 5.95l-.725-.725L8.8 10q-.3.3-.7.3t-.7-.3q-.3-.3-.3-.712t.3-.713l4.75-4.75q.6-.6 1.413-.6t1.412.6l.725.725l1.25-1.25q.3-.3.713-.3t.712.3L20.7 5.625q.3.3.3.713t-.3.712zM4 21q-.425 0-.712-.288T3 20v-1.925q0-.4.15-.763t.425-.637l6.525-6.55l3.775 3.75l-6.55 6.55q-.275.275-.637.425t-.763.15z" />
                                    </svg>
                                    Edit
                                    </Link>
                                </li>
                                <li class="w-full">
                                    <Link :href="route('articles.destroy', article)" method="delete" as="button"
                                        type="button"
                                        class="flex items-center text-left text-red-700 py-2 px-4 hover:bg-gray-200">
                                    <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                    </svg>
                                    Delete
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span
                        class="mb-4 bg-blue-100 text-blue-800 text-xs font-semibold inline-flex items-center px-2.5 py-0.5 rounded">
                        # {{ article.category }}
                    </span>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">
                        {{ article.title }}
                    </h1>
                </header>
                <img v-if="article.image" :src="article.image" alt="article image" class="rounded-lg">
                <p class="mt-4 text-lg text-gray-700">{{ article.content }}</p>
            </article>
        </div>
    </main>
</template>
<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const props = defineProps({
    article: Object
});

const page = usePage();

const menuActive = ref(false);

const isAuthor = computed(() => page.props.auth.user.id === props.article.user_id);
</script>
