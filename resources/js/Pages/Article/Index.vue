<template>
    <AuthenticatedLayout>
        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Our
                        Blog
                    </h2>
                    <ul class="flex space-x-3">
                        <li>
                            <Link :href="route('articles.create')" class="flex items-center py-2 px-4 hover:bg-gray-200">
                            <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15.275 12.475L11.525 8.7L14.3 5.95l-.725-.725L8.8 10q-.3.3-.7.3t-.7-.3q-.3-.3-.3-.712t.3-.713l4.75-4.75q.6-.6 1.413-.6t1.412.6l.725.725l1.25-1.25q.3-.3.713-.3t.712.3L20.7 5.625q.3.3.3.713t-.3.712zM4 21q-.425 0-.712-.288T3 20v-1.925q0-.4.15-.763t.425-.637l6.525-6.55l3.775 3.75l-6.55 6.55q-.275.275-.637.425t-.763.15z" />
                            </svg>
                            New article
                            </Link>
                        </li>
                    </ul>
                </div>
                <div class="grid gap-8 lg:grid-cols-2">
                    <ArticleCard v-for="article in articles.data" :key="article.id" :article="article" />
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import ArticleCard from '@/Components/ArticleCard.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
    articles: Object
});

</script>