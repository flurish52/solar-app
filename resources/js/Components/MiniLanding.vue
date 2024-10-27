<template>
    <section class="relative h-60 bg-cover bg-center" :style="{ backgroundImage: 'url(https://www.elsierenewables.energy/_nuxt/img9.095932e5.jpg)' }">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">{{pageName}}</h1>
        </div>
    </section>
</template>

<script>
export default {
    name: "MiniLanding"
}
</script>

<script setup>

import {defineProps} from "vue";
let props = defineProps({
    pageName: String,
})

</script>

<style scoped>

</style>
