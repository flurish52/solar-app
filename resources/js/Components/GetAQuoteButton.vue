<template>
    <div>
        <button
            @click = 'emitToggle'
            class="bg-green-600 text-white px-4 py-2 rounded">GET QUOTE</button>
    </div>
</template>

<script setup>
import {defineEmits} from 'vue'
let emits = defineEmits(['toggle'])
let emitToggle = () =>{
    emits('toggle')
}
</script>

<style scoped>

</style>
