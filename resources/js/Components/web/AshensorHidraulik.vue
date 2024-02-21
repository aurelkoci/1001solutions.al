<script setup>
const sherbimet = [
    {
        title: 'Passenger elevators',
        href: '#',
        category: { name: 'Ashensor elektrik', href: '#' },
        description:
            'Ne kemi projektuar ashensorët tanë të pasagjerëve 1001Solutions për të lëvizur banorët, qiramarrësit dhe vizitorët në ndërtesat tuaja të ulëta, të mesme dhe të larta në mënyrë të sigurt, të shpejtë dhe të rehatshme.',
        imageUrl:
            '/img/tre.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Passenger elevators i vogel',
        href: '#',
        category: { name: 'Ashensor elektrik/hidraulik', href: '#' },
        description:
            'Ne kemi projektuar ashensorët tanë të pasagjerëve 1001Solutions për të lëvizur banorët, qiramarrësit dhe vizitorët në ndërtesat tuaja të ulëta, të mesme dhe të larta në mënyrë të sigurt, të shpejtë dhe të rehatshme.',
        imageUrl:
            '/img/kater.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare',
        href: '#',
        category: { name: 'Ashensor elektrik/hidraulik', href: '#' },
        description:
            'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare.',
        imageUrl:
            '/img/nje.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare',
        href: '#',
        category: { name: 'Ashensor elektrik/hidraulik', href: '#' },
        description:
            'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare.',
        imageUrl:
            '/img/dy.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Passenger elevators',
        href: '#',
        category: { name: 'Ashensor elektrik', href: '#' },
        description:
            'Ne kemi projektuar ashensorët tanë të pasagjerëve 1001Solutions për të lëvizur banorët, qiramarrësit dhe vizitorët në ndërtesat tuaja të ulëta, të mesme dhe të larta në mënyrë të sigurt, të shpejtë dhe të rehatshme.',
        imageUrl:
            '/img/tre.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Passenger elevators i vogel',
        href: '#',
        category: { name: 'Ashensor elektrik/hidraulik', href: '#' },
        description:
            'Ne kemi projektuar ashensorët tanë të pasagjerëve 1001Solutions për të lëvizur banorët, qiramarrësit dhe vizitorët në ndërtesat tuaja të ulëta, të mesme dhe të larta në mënyrë të sigurt, të shpejtë dhe të rehatshme.',
        imageUrl:
            '/img/kater.webp',
        author: {
            href: '#',

        },
    },
    {
        title: 'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare',
        href: '#',
        category: { name: 'Ashensor elektrik/hidraulik', href: '#' },
        description:
            'Projektuar për tregun e ashensorëve me kate të ulëta dhe mesatare.',
        imageUrl:
            '/img/nje.webp',
        author: {
            href: '#',

        },
    },

]
</script>
<template>
    <div class="relative max-w-full px-4 pt-16 pb-20 bg-gray-50 dark:bg-slate-900 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">
        <div class="absolute inset-0">
            <div
                class="h-1/3 dark:bg-[url('/img/image-dark.png')] bg-[url('/img/image.webp')]  bg-no-repeat bg-right-top bg-contain sm:h-2/3" />
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-50">Ashensor
                    Hidraulik</h1>
                <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4 dark:text-gray-200">Ketu perfshihen te gjitha
                    projektim, furnizim
                    instalim dhe mirembajtje.</p>
            </div>
            <div class="grid max-w-lg gap-5 mx-auto mt-12 lg:max-w-none lg:grid-cols-3">
                <div v-for="sherbim in sherbimet" :key="sherbim.title"
                    class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-60" :src="sherbim.imageUrl" alt="" />
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-6 bg-white dark:bg-slate-800">
                        <div class="flex-1">
                            <a :href="sherbim.href" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900 dark:text-gray-50">{{ $t(sherbim.title) }}</p>
                                <p class="mt-3 text-base text-gray-500 dark:text-gray-200">{{ $t(sherbim.description) }}</p>
                            </a>
                        </div>
                        <div class="flex items-center mt-6">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <Link :href="sherbim.author.href"
                                        class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 sm:inline-flex sm:w-auto">
                                    Lexo me shume</Link>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
