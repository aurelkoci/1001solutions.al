<script setup>
import { ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

</script>

<template>
    <textarea ref="input" rows="4"
        class="block w-full rounded-md border-0 px-3.5 py-2 text-blue-900 shadow-sm ring-1 ring-inset placeholder:text-blue-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"></textarea>
</template>
