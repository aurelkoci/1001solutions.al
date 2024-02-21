<script setup>
import { ref } from 'vue'
import LocaleSwitcher from './LocaleSwitcher.vue'
import { Popover, PopoverButton, PopoverGroup, PopoverPanel } from '@headlessui/vue'
import {
    Bars3Icon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import LangueSwich from './Langue-Swich.vue';
import ElektrikElevator from '../Icons/ElektrikElevator.vue'
import HidraulikElevator from '../Icons/HidraulikElevator.vue'
import Instalimi from '../Icons/Instalimi.vue'
import Mirembajtje from '../Icons/Mirembajtje.vue'
import Modernizimi from '../Icons/Modernizimi.vue'
import PjeseKembimi from '../Icons/PjeseKembimi.vue'
import ComingSoon from '../Icons/ComingSoon.vue'
import Dropdown from './NavbarDropdown.vue'
defineProps({
    canLogin: Boolean,
});

const open = ref(false);
const open1 = ref(false);
const navBarMenu = {
    static: {
        home: 'Home',

    },
    dinamik: {
        produkte: [
            {
                id: 'navbar-produkte-ashensor-elektrik',
                name: 'Ashensor elektrik',
                description: 'Të përshtatjshem për përdorim të sigurt...',
                href: 'web.ashensor.elktrik',
                icon: ElektrikElevator,
                bg: ' bg-blue-50',
                hoverbg: 'hover:bg-blue-50',
            },
            {
                id: 'navbar-produkte-ashensor-industrial',
                name: 'Ashensor hidraulik',
                description: 'Ashensor të përshtashëm për pesha të mdhja ...',
                href: 'web.ashensor.hidraulik',
                icon: HidraulikElevator,
                bg: ' bg-indigo-50',
                hoverbg: 'hover:bg-indigo-50',
            },
            {
                id: 'navbar-produkte-shkalle-elektrike',
                name: 'Shkallë elektrike',
                description: '...',
                href: 'web.shkalle.elektrike',
                icon: ComingSoon,
                bg: ' bg-green-50',
                hoverbg: 'hover:bg-green-50',
            },
        ],
        sherbime: [
            {
                id: 'navbar-sherbime-instalim',
                name: 'Instalim',
                description: 'Instalim te aprovuar nga prodhuesit sipas direktivave CE....',
                href: "web.instalimi",
                icon: Instalimi,
                bg: ' bg-sky-50',
                hoverbg: ' hover:bg-sky-50',
            },
            {
                id: 'navbar-sherbime-mirembajtje',
                name: 'Mirëmbajtja',
                description: 'Mirëmbajtja nga ne garanton punim të sigurt dhe jet gjatesi të ashensori....',
                href: 'web.mirembajtje',
                icon: Mirembajtje,
                bg: ' bg-teal-50',
                hoverbg: 'hover:bg-teal-50',
            },
            {
                id: 'navbar-sherbime-modernizim',
                name: 'Modernizimi',
                description: 'Realizojmë edhe modernizim të pjesshëm, rinovim deri në zëvendësim ashensori ...',
                href: 'web.modernizim',
                icon: Modernizimi,
                bg: ' bg-cyan-50',
                hoverbg: 'hover:bg-cyan-50',
            },
            {
                id: 'navbar-sherbime-pjese-kembimi',
                name: 'Pjesë këmbimi',
                description: 'Ne disponojmë çdo pjesë këmbimi, për një funksionim pa nderprerje ...',
                href: 'web.pjese.kembimi',
                icon: PjeseKembimi,
                bg: ' bg-indigo-50',
                hoverbg: 'hover:bg-indigo-50',
            },

        ]
    }
}
const produkte = [
    {
        id: 'navbar-produkte-1',
        name: 'Produkti1',
        description: 'Të përshtatjshem për përdorim të sigurt...',
        href: 'web.produkti1',
        icon: ElektrikElevator,
        bg: ' bg-blue-50',
        hoverbg: 'hover:bg-blue-50',
    },
]

const sherbime = [
    {
        id: 'navbar-sherbime-sherbimi1',
        name: 'sherbimi1',
        description: 'Instalim te aprovuar nga prodhuesit sipas direktivave CE....',
        href: "web.sherbimi1",
        icon: Instalimi,
        bg: ' bg-sky-50',
        hoverbg: ' hover:bg-sky-50',
    },

]
const mobileMenuOpen = ref(false)
</script>
<template>
    <Popover class="fixed z-50 w-full bg-white dark:bg-slate-900">
        <div class="px-4 mx-auto max-w-screen-2xl sm:px-6">
            <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <Link href="/">
                    <span class="sr-only">1001Solutions</span>
                    <img class="hidden w-auto h-8 dark:flex sm:h-10" src="logo1001.svg" alt="1001Solutions" />
                    <img class="flex w-auto h-8 dark:hidden sm:h-10" src="logo1001.svg" alt="1001Solutions" />
                    </Link>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <button type="button" @click='mobileMenuOpen = true'
                        class="-m-2.5 inline-flex items-center justify-center rounded-md  p-2 bg-white  text-sky-400 hover:bg-sky-100 hover:text-sky-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-500">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                </div>
                <PopoverGroup class="hidden md:flex lg:gap-x-12">
                    <Link :href="route('web.home')" class="hidden text-primary lg:flex" id='navbar_home'>Home</Link>
                    <Dropdown emri='Produkte' :items='produkte' id='navbar_produkte' />
                    <Dropdown emri='Sherbime' :items='sherbime' id='navbar_sherbime' />
                    <!-- <Link :href="route('web.dokumentacion')" class="hidden text-primary lg:flex" id='navbar-dokumentacion'>
                    Documentacion
                    </Link> -->
                    <Link :href="route('web.rethnesh')" class="hidden text-primary lg:flex" id='navbar-rethnesh'>Reth nesh
                    </Link>
                    <Link :href="route('web.kontakt')" class="text-primary" id='navbar-kontakt'>{{ $t('Kontakt') }}
                    </Link>
                </PopoverGroup>
                <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
                    <div class="relative">
                        <LocaleSwitcher></LocaleSwitcher>
                    </div>
                    <div class="flex items-center pl-4 ml-6 border-l border-slate-200 dark:border-slate-800">
                        <PopoverGroup as="nav" class="hidden pl-2 space-x-10 md:flex">
                            <Popover v-if="canLogin" class="relative">
                                <Link v-if="$page.props.user" :href="route('dashboard')"
                                    class="text-base text-gray-700 dark:text-sky-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                                </svg>
                                </Link>

                                <template v-else>
                                    <div
                                        class='inline-flex items-center text-base font-medium group hover:text-sky-600 text-sky-400 focus:outline-none'>
                                        <Link :href="route('login')" id='navbar-login'
                                            class="text-sm text-gray-700 dark:text-sky-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                        </svg>
                                        </Link>
                                    </div>
                                </template>
                            </Popover>
                        </PopoverGroup>
                    </div>
                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="scale-95 opacity-0"
            enter-to-class="scale-100 opacity-100" leave-active-class="duration-100 ease-in"
            leave-from-class="scale-100 opacity-100" leave-to-class="scale-95 opacity-0">
            <div class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform md:hidden">
                <div v-if='mobileMenuOpen'
                    class="bg-white divide-y-2 rounded-lg shadow-lg divide-sky-50 dark:bg-slate-500 dark:text-slate-50 ring-1 ring-black ring-opacity-5">
                    <div class="px-5 pt-5 pb-6">
                        <div class="flex items-center justify-between">
                            <Link :href="route('web.home')">
                            <img class="hidden w-auto h-8 dark:flex sm:h-10" src="logo1001.svg" alt="1001Solutions" />
                            <img class="flex w-auto h-8 dark:hidden sm:h-10" src="logo1001.svg" alt="1001Solutions" />
                            </Link>
                            <div class="-mr-2">
                                <button @click='mobileMenuOpen = false'
                                    class="inline-flex items-center justify-center p-2 bg-white rounded-md dark:bg-slate-200 text-sky-400 hover:bg-sky-100 hover:text-sky-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-500">
                                    <span class="sr-only">Close menu</span>
                                    <XMarkIcon class="w-6 h-6" aria-hidden="true" />
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8 text-sky-900 dark:text-slate-50">
                                <Link v-for="item in produkte" :key="item.name" :href="route(item.href)"
                                    @click='mobileMenuOpen = false'
                                    class="flex items-center p-3 -m-3 rounded-md hover:bg-sky-50 dark:hover:text-sky-900">
                                <button class='flex'>
                                    <component :is="item.icon" class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                                    <span class="ml-3 text-base font-medium ">{{ item.name }}</span>
                                </button>

                                </Link>
                            </nav>
                        </div>
                    </div>
                    <div class="px-5 py-6 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8 dark:text-slate-50">
                            <Link :href="route('web.rethnesh')" @click='mobileMenuOpen = false'
                                class="p-3 text-base font-medium rounded-md text-sky-900 hover:text-sky-700 hover:bg-sky-50 dark:hover:text-sky-900 dark:text-slate-50">
                            <button>
                                Rreth nesh
                            </button>
                            </Link>

                            <Link :href="route('web.dokumentacion')" @click='mobileMenuOpen = false'
                                class="p-3 text-base font-medium rounded-md text-sky-900 hover:text-sky-700 hover:bg-sky-50 dark:hover:text-sky-900 dark:text-slate-50">
                            <button>
                                Dokumentacion
                            </button>
                            </Link>
                            <Link v-for="item in sherbime" :key="item.name" :href="route(item.href)"
                                @click='mobileMenuOpen = false'
                                class="p-3 text-base font-medium rounded-md text-sky-900 hover:text-sky-700 hover:bg-sky-50 dark:hover:text-sky-900 dark:text-slate-50">
                            <button>{{ item.name }}</button>
                            </Link>
                            <Link :href="route('web.kontakt')" @click='mobileMenuOpen = false'
                                class="p-3 text-base font-medium rounded-md text-sky-900 hover:text-sky-700 hover:bg-sky-50 dark:hover:text-sky-900 dark:text-slate-50">
                            <button>{{ $t('Kontakt') }}</button>
                            </Link>
                        </div>
                        <LangueSwich @click='mobileMenuOpen = false'></LangueSwich>
                        <div v-if="canLogin">
                            <Link v-if="$page.props.user" :href="route('dashboard')"
                                class="text-sm underline text-sky-700 dark:text-sky-500">Dashboard</Link>

                            <template v-else>
                                <Link :href="route('login')"
                                    class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-sky-600 hover:bg-sky-700">
                                Login</Link>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </Popover>
</template>
