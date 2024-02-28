<template>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white  antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <form class="mx-auto w-full max-w-2xl" @submit.prevent="updateArticle">
                <Link :href="route('articles.show', article)" class="flex items-center text-sm text-gray-600">
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
                    <label for="category"
                        class="block mb-3 text-sm font-semibold text-gray-900">Category</label>
                    <input type="text" id="category" v-model="form.category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Article title" required />
                    <InputError :message="form.errors.category" />
                </div>
                <div class="mb-5">
                    <label for="content"
                        class="block mb-3 text-sm font-semibold text-gray-900">Content</label>
                    <textarea id="content" rows="10" v-model="form.content"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Article content" required></textarea>
                    <InputError :message="form.errors.content" />
                </div>
                <div class="block mb-3 text-sm font-semibold text-gray-900">Image</div>
                <div class="relative w-max">
                    <img :src="articleImagePreview" alt="article image" class="rounded-lg">
                    <label for="dropzone-file"
                        class="z-50 absolute top-4 right-4 w-12 h-12 flex justify-center items-center bg-blue-500 rounded-full shadow-gray-600 shadow-md">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m22.7 14.3l-1 1l-2-2l1-1c.1-.1.2-.2.4-.2c.1 0 .3.1.4.2l1.3 1.3c.1.2.1.5-.1.7M13 19.9V22h2.1l6.1-6.1l-2-2zM21 5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h6v-1.9l1.1-1.1H5l3.5-4.5l2.5 3l3.5-4.5l1.6 2.1l4.9-5z" />
                        </svg>
                        <input id="dropzone-file" type="file" accept="image/png, image/jpeg" class="hidden"
                            @change="handleImageSelect" />
                    </label>
                    <InputError :message="form.errors.imageFile || form.errors.newImage" />
                </div>
                <button type="submit"
                    class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2   focus:outline-none">Update
                    article</button>
            </form>
        </div>
    </main>
</template>
<script setup>
import { ref } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import { onUnmounted } from 'vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    article: Object
});

const form = useForm({ ...props.article, newImage: null });

const articleImagePreview = ref(form.imageFile);

onUnmounted(() => {
    URL.revokeObjectURL(articleImagePreview.value);
});

function handleImageSelect(event) {
    form.newImage = event.target.files && event.target.files[0];
    articleImagePreview.value = URL.createObjectURL(form.newImage);
}

function updateArticle() {
    router.post(route('articles.update', props.article),
        {
            ...form.data(),
            _method: 'put'
        }, {
        onError: (errors) => {
            form.errors = errors;
        }
    });
}

</script>