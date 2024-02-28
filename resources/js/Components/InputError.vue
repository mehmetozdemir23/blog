<template>
    <div v-show="message">
        <p class="mt-4 text-sm text-red-600">
            {{ message }}
        </p>
    </div>
</template>
<script setup>
defineProps({
    message: String
});
</script>

