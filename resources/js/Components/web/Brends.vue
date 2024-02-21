<template>
    <div class="bg-white dark:bg-gray-800">
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <p class="text-center text-lg font-semibold text-gray-600 dark:text-gray-50">Bashkpuntoret tane.</p>
            <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
                <template v-for='bashpuntor in bashpuntoret' :key='bashpuntor.id'>
                    <div class="col-span-1 flex justify-center bg-gray-50 dark:bg-gray-600 py-8 px-8">
                        <img class="max-h-12" :src="bashpuntor.src" :alt="bashpuntor.name" />
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>
<script setup>
const bashpuntoret = [
    {
        id: 1,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 2,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 3,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 4,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 5,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 6,
        name: "schindler",
        src: "img/schindler.svg"
    },
    {
        id: 7,
        name: "schindler",
        src: "img/schindler.svg"
    },
]
</script>
