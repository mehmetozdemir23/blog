<template>
    <div class="antialiased bg-gray-50">
        <Navbar />
        <main>
            <slot />
        </main>
    </div>
</template>
<script setup>
import Navbar from '@/Components/Navbar.vue';
</script>