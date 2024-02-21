<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
    flex: String
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div :class="flex">
        <span
            class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-gray-500 sm:text-sm">+</span>
        <input ref="input" type="number" name="username" id="username" autocomplete="username"
            class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50  shadow-sm"
            :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" placeholder='355670000000' />
    </div>




</template>
