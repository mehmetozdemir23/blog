<template>
    <AuthenticatedLayout>
        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Our
                        Blog
                    </h2>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-4">
                        <select id="sort" class="py-2 border border-gray-300 rounded" @change="sortArticles">
                            <option value="newest" :selected="isSelectedSort('newest')">Newest</option>
                            <option value="oldest" :selected="isSelectedSort('oldest')">Oldest</option>
                        </select>
                    </div>
                    <Pagination :links="articles.links" />
                </div>
                <div class="grid gap-8 lg:grid-cols-2">
                    <ArticleCard v-for="article in articles.data" :key="article.id" :article="article" />
                </div>
            </div>
        </section>
        <Link :href="route('articles.create')"
            class="z-50 fixed bottom-12 right-12 w-12 h-12 flex justify-center items-center bg-blue-500 hover:bg-blue-600 rounded-full shadow-gray-400 shadow-lg">
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M22 2s-7.64-.37-13.66 7.88C3.72 16.21 2 22 2 22l1.94-1c1.44-2.5 2.19-3.53 3.6-5c2.53.74 5.17.65 7.46-2c-2-.56-3.6-.43-5.96-.19C11.69 12 13.5 11.6 16 12l1-2c-1.8-.34-3-.37-4.78.04C14.19 8.65 15.56 7.87 18 8l1.21-1.93c-1.56-.11-2.5.06-4.29.5c1.61-1.46 3.08-2.12 5.22-2.25c0 0 1.05-1.89 1.86-2.32" />
        </svg>
        </Link>
    </AuthenticatedLayout>
</template>

<script setup>
import { Link, router } from '@inertiajs/vue3';
import ArticleCard from '@/Components/ArticleCard.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue';

defineProps({
    articles: Object
});

function sortArticles(event) {
    const sort = event.target.value;
    router.get(route('articles.index', { sort }));
}

function isSelectedSort(sort) {
    return route().params.sort === sort;
}
</script>
