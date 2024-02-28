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
                <div class="mt-6 mb-5">
                    <label for="category" class="block mb-3 text-sm font-semibold text-gray-900">Category</label>
                    <input type="text" id="category" v-model="form.category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Article title" required />
                    <InputError :message="form.errors.category" />
                </div>
                <div class="mb-5">
                    <label for="content" class="block mb-3 text-sm font-semibold text-gray-900">Content</label>
                    <textarea id="content" rows="10" v-model="form.content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Article content" required></textarea>
                    <InputError :message="form.errors.content" />
                </div>
                <div class="block mb-3 text-sm font-semibold text-gray-900">Image</div>
                <div v-if="articleImagePreview" class="relative w-max">
                    <img :src="articleImagePreview" alt="article image" class="rounded-lg">
                    <button type="button" @click="cancelImageSelect"
                        class="z-50 absolute top-4 right-4 w-12 h-12 flex justify-center items-center bg-red-500 rounded-full shadow-gray-600 shadow-md">
                        <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m12 13.4l-2.9 2.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l2.9-2.9l-2.9-2.875q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l2.9 2.9l2.875-2.9q.275-.275.7-.275t.7.275q.3.3.3.713t-.3.687L13.375 12l2.9 2.9q.275.275.275.7t-.275.7q-.3.3-.712.3t-.688-.3z" />
                        </svg>
                    </button>
                </div>
                <label v-else for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50   hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2">
                            </path>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">JPG or PNG (MAX. 1MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" @change="handleImageSelect">
                </label>
                <button type="submit"
                    class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2   focus:outline-none">Publish
                    article</button>
            </form>
        </div>
    </main>
</template>
<script setup>
import { ref } from 'vue';
import { Link, useForm } from '@inertiajs/vue3';
import { onUnmounted } from 'vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    article: Object
});

const form = useForm({
    title: '',
    category: '',
    content: '',
    imageFile: null
});

const articleImagePreview = ref(null);

onUnmounted(() => {
    URL.revokeObjectURL(articleImagePreview.value);
});

function handleImageSelect(event) {
    form.imageFile = event.target.files && event.target.files[0];
    articleImagePreview.value = URL.createObjectURL(form.imageFile);
}

function cancelImageSelect() {
    form.imageFile = null;
    articleImagePreview.value = null;
}

function storeArticle() {
    form.post(route('articles.store'));
}



</script>