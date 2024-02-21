<template>
    <div class="relative">
        <button href="#" class="flex items-center" @click.prevent="gjuha.toggleVisibility" aria-label="langue">
            <IconAnglisht v-if='gjuha.langue == "\"en\"" | gjuha.langue == "en"' />
            <icon-shqip v-if='gjuha.langue == "\"sq\"" | gjuha.langue == "sq"' />
        </button>
        <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1"
            enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150"
            leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1" name="dropdown-fade">
            <ul v-click-away="gjuha.hideDropdown" v-if="gjuha.isVisible" ref="dropdown"
                class="absolute normal-case z-50 font-normal -right-1/2  lg:right-0 bg-white shadow overflow-hidden rounded w-14 md:w-36 border mt-2 py-1 lg:z-50">

                <button href="#" @click="gjuha.setLocale('sq')" :class="[gjuha.langue == 'sq' ? 'bg-sky-200' : '']"
                    class="flex items-center px-3 py-3 hover:bg-gray-200 w-full">
                    <icon-shqip />
                    <span class="hidden md:flex ml-2 text-sky-700">{{ $t('Shqip') }}</span>
                </button>
                <button href="#" @click="gjuha.setLocale('en')" :class="[gjuha.langue == 'en' ? 'bg-sky-200' : '']"
                    class="flex items-center px-3 py-3 hover:bg-gray-200 w-full">
                    <IconAnglisht />
                    <span class="hidden md:flex ml-2 text-sky-700">{{ $t('English') }}</span>

                </button>
            </ul>
        </transition>
    </div>
</template>
  

<script setup>
import IconAnglisht from '../Icons/IconAnglisht.vue'
import IconShqip from '../Icons/IconShqip.vue'
import { useLangueStore } from '../stores/Langue';

const gjuha = useLangueStore();

</script>