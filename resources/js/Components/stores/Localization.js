import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { loadLanguageAsync } from 'laravel-vue-i18n';

export const useLangueStore = defineStore("langue", () => {

  const isVisible = ref(false)
  let langue = ref('sq')

  function ndryshoGjuhen() {
    loadLanguageAsync(localStorage.getItem('langue'))
    langue.value = localStorage.getItem('langue')
  }
  
  function toggleVisibility() {
    isVisible.value = !isVisible.value
  }
  function hideDropdown() {
    isVisible.value = false
  }
  function setLocale(locale) {
    loadLanguageAsync(locale)
    isVisible.value = false
    langue.value = locale
    localStorage.setItem('langue', langue.value)
  }
  // const isEnglish = computed(() => {
  //   if (langue.value == 'en') {
  //     return true
  //   }
  // })

  return { langue, hideDropdown, setLocale, toggleVisibility, isVisible, ndryshoGjuhen };
});