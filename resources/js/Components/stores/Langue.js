import { defineStore } from "pinia";
import { ref, computed } from "vue";
import { loadLanguageAsync } from 'laravel-vue-i18n';
const STORE_NAME = 'langue'
const getDefaultLangue =  'sq'
const getLangue = () => {
  const langue = localStorage.getItem(STORE_NAME)
  if (langue && langue !='sq') {
    loadLanguageAsync(langue);
  }
  return langue ? langue : getDefaultLangue
}
const getVisible = () => {
  const isVisible = ref(false)
  return isVisible
} 
export const useLangueStore = defineStore(STORE_NAME, {
  state: () => ({
    langue: getLangue(),
    isVisible: getVisible()
  }),
  getters: {
  },
  actions: {
    ndryshoGjuhen(state) {
      loadLanguageAsync(localStorage.getItem('langue'))
      this.langue = localStorage.getItem('langue')
    },
    toggleVisibility() {
      this.isVisible = ! this.isVisible
    },
    hideDropdown() {
      this.isVisible = false
    },
    setLocale(locale) {
      loadLanguageAsync(locale)
      this.isVisible = false
      this.langue = locale
      localStorage.setItem(STORE_NAME, this.langue)
    }
  }

});