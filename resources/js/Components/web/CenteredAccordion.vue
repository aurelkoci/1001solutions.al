<template>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
            <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Pyetjet me të shpshta</h2>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="pt-6" v-slot="{ open }">
                        <dt>
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-900">
                                <span class="text-base font-semibold leading-7">{{ faq.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <PlusSmallIcon v-if="!open" class="h-6 w-6" aria-hidden="true" />
                                    <MinusSmallIcon v-else class="h-6 w-6" aria-hidden="true" />
                                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600">{{ faq.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                </dl>
            </div>
        </div>
    </div>
</template>
  
<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { MinusSmallIcon, PlusSmallIcon } from '@heroicons/vue/24/outline'

const faqs = [
    {
        question: "Çfarë dokumentesh duhen që të instaloj një ashensor?",
        answer:
            "Për instalimin e nje ashensori duhet të kesh një leje ndrtimi për këtë objekt, ku është e përshkruar një ashensor.",
    },
    // More questions...
]
</script>