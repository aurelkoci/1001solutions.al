<script setup>
import { ref } from 'vue'
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'


const props = defineProps({
    items: Array,
    emri: String,
    id: String
});

const open = ref(false);
</script>
<template>
    <Popover class="relative" @mouseenter="open = true" @mouseleave="open = false" @click="open = !open">

        <PopoverButton class="text-primary" @click="open = !open" :id='props.id'>
            {{ props.emri }}
            <ChevronDownIcon class="flex-none w-5 h-5 text-gray-400" aria-hidden="true"
                :class="{ 'rotate-180 transform': open }" />
        </PopoverButton>
        <div class='absolute w-20 h-4'></div>
        <transition enter-active-class="transition duration-300 ease-out" enter-from-class="translate-y-1 opacity-0"
            enter-to-class="translate-y-0 opacity-100" leave-active-class="transition duration-200 ease-in"
            leave-from-class="translate-y-0 opacity-100" leave-to-class="translate-y-1 opacity-0">
            <div v-if="open">
                <PopoverPanel
                    class="absolute z-10 w-screen max-w-md mt-3 overflow-hidden bg-white shadow-lg dark:bg-slate-700 -left-8 top-full rounded-3xl ring-1 ring-gray-900/5"
                    static>
                    <div class=''></div>
                    <div class="p-4">
                        <div v-for="item in props.items" :key="item.name" :class='item.hoverbg' @click="open = !open"
                            class="relative flex p-4 text-base leading-6 rounded-lg group gap-x-6">
                            <div :class='item.bg'
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 group-hover:bg-white">
                                <component :is="item.icon" class="w-20 h-20 text-gray-600 group-hover:text-blue-600"
                                    aria-hidden="true" />
                            </div>
                            <div class="flex-auto group">
                                <Link :href="route(item.href)" :id='item.id'
                                    class="block text-base font-bold leading-6 text-blue-950 dark:text-blue-200 hover:text-blue-800">
                                {{ item.name }}
                                <span class="absolute inset-0" />
                                </Link>
                                <p class="mt-1 text-blue-800 dark:text-blue-100 dark:group-hover:text-blue-800">
                                    {{ item.description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </PopoverPanel>
            </div>

        </transition>
    </Popover>
</template>
