<template>
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 px-8">
            <Link :href="route('articles.index')">
            <ApplicationLogo class="h-12 sm:h-16 fill-current text-gray-500" />
            </Link>
            <div class="relative">
                <button type="button" class="flex items-center font-semibold" @click="menuActive = !menuActive">
                    {{ user.name }}
                    <svg class="h-6 w-6 ml-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4z" />
                    </svg>
                </button>
                <ul v-if="menuActive"
                    class="absolute -bottom-2 right-0 translate-y-full shadow-lg shadow-gray-200 text-sm divide-y font-semibold">
                    <li class="w-full">
                        <Link :href="route('logout')" method="post" as="button" type="button"
                            class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-200">
                        <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 12a1 1 0 0 0 1 1h7.59l-2.3 2.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76a1 1 0 0 0-.21-.33l-4-4a1 1 0 1 0-1.42 1.42l2.3 2.29H5a1 1 0 0 0-1 1M17 2H7a3 3 0 0 0-3 3v3a1 1 0 0 0 2 0V5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3a1 1 0 0 0-2 0v3a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3" />
                        </svg>
                        Sign out
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script setup>
import { ref } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const page = usePage();

const user = computed(() => page.props.auth.user);

const menuActive = ref(false);
</script>