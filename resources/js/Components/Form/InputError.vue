<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-900 font-normal tracking-tighter">
            {{ message }}
        </p>
    </div>
</template>
