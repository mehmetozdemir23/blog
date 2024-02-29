<template>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <form class="mx-auto w-full max-w-2xl" @submit.prevent="storeArticle">
                <Link :href="route('articles.index')" class="flex items-center text-sm text-gray-600">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m14 18l-6-6l6-6l1.4 1.4l-4.6 4.6l4.6 4.6z" />
                </svg>
                Back
                </Link>
                <div class="mt-6 mb-5">
                    <label for="title" class="block mb-3 text-sm font-semibold text-gray-900">Title</label>
                    <input type="text" id="title" v-model="form.title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Article title" required />
                    <InputError :message="form.errors.title" />
                </div>
                <div class="mt-5">
                    <label for="category" class="block mb-3 text-sm font-semibold text-gray-900">Category</label>
                    <input type="text" id="category" v-model="form.category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Article category" required />
                    <InputError :message="form.errors.category" />
                </div>
                <div class="mt-5">
                    <label for="content" class="block mb-3 text-sm font-semibold text-gray-900">Content</label>
                    <textarea id="content" rows="10" v-model="form.content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Article content" required></textarea>
                    <InputError :message="form.errors.content" />
                </div>
                <div class="mt-5">
                    <label for="image" class="block mb-3 text-sm font-semibold text-gray-900">Image URL</label>
                    <input type="text" id="image" v-model="form.image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Article image URL" required />
                    <InputError :message="form.errors.image" />
                </div>
                <button type="submit"
                    class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2   focus:outline-none">Publish
                    article</button>
            </form>
        </div>
    </main>
</template>
<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    article: Object
});

const form = useForm({
    title: '',
    category: '',
    content: '',
    image:''
});

function storeArticle() {
    form.post(route('articles.store'));
}

</script>