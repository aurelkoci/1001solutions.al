<script>
import layout from '../Layouts/WebLayout.vue'
export default { layout }
</script>

<script setup>
import { computed, onMounted } from 'vue'
import { useLangueStore } from '../Components/stores/Localization';
import RethneshPershkrimVue from '../Components/web/Rethnesh-Pershkrim.vue';

const gjuha = useLangueStore();

const isEnglish = computed(() => {
    if (gjuha.langue == 'en') {
        return true
    }
})




defineProps({
    canLogin: Boolean,
});
</script>

<template>
    <Head title="Produkti1" />


    <RethneshPershkrimVue></RethneshPershkrimVue>
</template>
