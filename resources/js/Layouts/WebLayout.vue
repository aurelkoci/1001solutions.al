<script setup>
import { Head } from '@inertiajs/vue3'
import {
    BookmarkSquareIcon,
    CalendarIcon,
    LifebuoyIcon,
    ShieldCheckIcon,
} from '@heroicons/vue/24/outline'
import Navbar from '../Components/web/Navbar.vue';
import Footer from '../Components/web/Footer.vue'
import ToastList from '../Components/web/ToastList.vue'
const resources = [
    {
        name: 'Help Center',
        description: 'Get all of your questions answered in our forums or contact support.',
        href: '#',
        icon: LifebuoyIcon,
    },
    {
        name: 'Guides',
        description: 'Learn how to maximize our platform to get the most out of it.',
        href: '#',
        icon: BookmarkSquareIcon,
    },
    {
        name: 'Events',
        description: 'See what meet-ups and other events we might be planning near you.',
        href: '#',
        icon: CalendarIcon,
    },
    { name: 'Security', description: 'Understand how we take your privacy seriously.', href: '#', icon: ShieldCheckIcon },
]
const recentPosts = [
    { id: 1, name: 'Boost your conversion rate', href: '#' },
    { id: 2, name: 'How to use search engine optimization to drive traffic to your site', href: '#' },
    { id: 3, name: 'Improve your customer experience', href: '#' },
]
const posts = [
    {
        title: 'Passenger elevators',
        href: '#',
        category: { name: 'Ashensor elektrik', href: '#' },
        description:
            'Ne kemi projektuar ashensorët tanë të pasagjerëve 1001Solutions për të lëvizur banorët, qiramarrësit dhe vizitorët në ndërtesat tuaja të ulëta, të mesme dhe të larta në mënyrë të sigurt, të shpejtë dhe të rehatshme.',
        imageUrl:
            'https://www.schindler.com/content/dam/website/global/images/elevators/schindler-fhnw-university-of-applied-sciences-22.jpg/_jcr_content/renditions/original.image_file.1920.1080.file/schindler-fhnw-university-of-applied-sciences-22.jpg',
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
            'https://www.schindler.com/content/dam/website/us/images/elevators/schindler-3100/sec-3100-elevator.jpg/_jcr_content/renditions/original.image_file.640.360.file/sec-3100-elevator.jpg',
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
            'https://www.schindler.com/content/dam/website/us/images/elevators/schindler-3300/schindler-3300-elevator-photo.jpg/_jcr_content/renditions/original.image_file.640.360.file/schindler-3300-elevator-photo.jpg',
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
            'https://www.schindler.com/content/dam/website/us/images/elevators/schindler-5500/image-gallery/sec-5500-elevator-exterior.jpg/_jcr_content/renditions/original.image_file.640.360.file/sec-5500-elevator-exterior.jpg',
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
            'https://www.schindler.com/content/dam/website/global/images/elevators/schindler-fhnw-university-of-applied-sciences-22.jpg/_jcr_content/renditions/original.image_file.1920.1080.file/schindler-fhnw-university-of-applied-sciences-22.jpg',
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
            'https://www.schindler.com/content/dam/website/us/images/elevators/schindler-3100/sec-3100-elevator.jpg/_jcr_content/renditions/original.image_file.640.360.file/sec-3100-elevator.jpg',
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
            'https://www.schindler.com/content/dam/website/us/images/elevators/schindler-3300/schindler-3300-elevator-photo.jpg/_jcr_content/renditions/original.image_file.640.360.file/schindler-3300-elevator-photo.jpg',
        author: {
            href: '#',

        },
    },

]
defineProps({
    canLogin: Boolean,
});
</script>

<template>
    <Head>
        <title>Canaj Lift</title>
        <meta head-key="description" name="description" content="Montimi dhe instalim ashensori." />
        <link rel="icon" type="image/png" href="/favicon-32x32.png" />
    </Head>
    <ToastList />


    <Navbar :canLogin='canLogin'></Navbar>
    <div class="relative w-full pt-10">
        <slot></slot>
        <Footer></Footer>
    </div>
</template>
