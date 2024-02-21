<script>
import layout from '../Layouts/WebLayout.vue'
export default { layout }
</script>

<script setup>
import { computed, onMounted } from 'vue'
import { useLangueStore } from '../Components/stores/Localization';
import KontaktPage from '../Components/web/Kontakt-Page.vue'

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
    <Head title="Industrial" />


    <KontaktPage></KontaktPage>
</template>
