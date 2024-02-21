<script setup>
import ToastListItem from './ToastListItem.vue';
import { router, usePage } from '@inertiajs/vue3';
import { onMounted, onUnmounted } from 'vue'
import toast from '../stores/toast';


const page = usePage()

let removeFinishEventsListener = router.on('finish', () => {
  if (page.props.success) {
    toast.add({
      message: page.props.success
    })
  }
})




// setTimeout(()=> toast.add({
//             message: "Pinon"
//         }))


onUnmounted(() => removeFinishEventsListener())

function remove(index) {
  toast.remove(index, 1);
}


</script>

<template>
  <TransitionGroup tag='div' name="nested" class='fixed bottom-4 right-4 z-50 space-y-4 w-full max-w-xs'>
    <ToastListItem class="outer" v-for="(item, index) in toast.items" :key="item.key" :message="item.message"
      :duration='5000' @remove="remove(index)" />
  </TransitionGroup>
</template>

<style>
.outer,
.inner {
  background: #9dc9a0;
  padding: 30px;
  min-height: 100px;
}

.inner {
  background: #c43131;
}

.nested-enter-active,
.nested-leave-active {
  transition: all 0.3s ease-in-out;
}

/* delay leave of parent element */
.nested-leave-active {
  transition-delay: 0.25s;
}

.nested-enter-from,
.nested-leave-to {
  transform: translateY(30px);
  opacity: 0;
}

/* we can also transition nested elements using nested selectors */
.nested-enter-active .inner,
.nested-leave-active .inner {
  transition: all 0.3s ease-in-out;
}

/* delay enter of nested element */
.nested-enter-active .inner {
  transition-delay: 0.25s;
}

.nested-enter-from .inner,
.nested-leave-to .inner {
  transform: translateX(30px);
  /*
  	Hack around a Chrome 96 bug in handling nested opacity transitions.
    This is not needed in other browsers or Chrome 99+ where the bug
    has been fixed.
  */
  opacity: 0.001;
}
</style>