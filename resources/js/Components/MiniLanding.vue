<template>
    <section class="relative h-60 bg-cover bg-center" :style="{ backgroundImage: 'url(https://www.bakerinstitute.org/sites/default/files/styles/16_9_small_564x317/public/2023-12/AdobeStock-291971973-Clean%2BEnergy.jpeg?h=384444d0&itok=OgI7L1EJ)' }">
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
