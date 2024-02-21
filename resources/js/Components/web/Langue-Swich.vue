<template>
  <SwitchGroup as="div" class="flex items-center justify-center space-x-2">
    <span class="flex items-center justify-center">
      <IconShqip></IconShqip>
    </span>
    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
    <button type="button" @click="gjuha.setLocale(actualGjuha ? 'sq' : 'en')" :class="[actualGjuha
      ? 'bg-blue-600' : 'bg-red-600'
      , 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2'
    ]" role="switch" aria-checked="false">
      <span class="sr-only">Use setting</span>
      <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
      <span aria-hidden="true"
        :class="[actualGjuha ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']"></span>
    </button>
    <!-- <Switch v-model="enabled"
      :class="[enabled ? 'bg-blue-600' : 'bg-red-600', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2']">
      <span aria-hidden="true"
        :class="[enabled ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
    </Switch> -->
    <span>
      <IconAnglisht></IconAnglisht>
    </span>
  </SwitchGroup>
</template>
  
<script setup>
import { ref, computed } from 'vue'
import { Switch, SwitchDescription, SwitchGroup, SwitchLabel } from '@headlessui/vue'
import IconAnglisht from '../Icons/IconAnglisht.vue'
import IconShqip from '../Icons/IconShqip.vue'
import { useLangueStore } from '../stores/Localization';

const gjuha = useLangueStore();
// const enabled = defineModel(gjuha.isVisible)
const actualGjuha = computed(() => {
  return gjuha.langue == "en" | gjuha.langue == "\"en\"" ? true : false
})

</script>