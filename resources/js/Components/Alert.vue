<template>
    <div v-if="localMessage"
        class="fixed top-8 left-1/2 -translate-x-1/2 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 shadow">
        {{ message }}
    </div>
</template>
<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
    message: String
});

const localMessage = ref(props.message);

onMounted(() => {
    setTimeout(() => {
        localMessage.value = '';
    }, 5000);
});
</script>