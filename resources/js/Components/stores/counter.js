import { ref, computed } from "vue";
import { defineStore } from "pinia";

export const useCounterStore = defineStore("counter", () => {
  // data perpertis
  const count = ref(0);
  //  computed
  const doubleCount = computed(() => count.value * 2);
  const oddOrEven = computed(() => (count.value % 2 === 0 ? "odd" : "even"));
  // methos
  function increment() {
    count.value++;
  }
  function decrement() {
    count.value--;
  }
  function duble() {
    count.value = count.value * 2;
  }
  function fuqi() {
    count.value = count.value * count.value;
  }

  return { count, doubleCount, increment, decrement, duble, fuqi, oddOrEven };
});
