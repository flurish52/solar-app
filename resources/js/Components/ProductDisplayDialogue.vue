<template>
    <div class="absolute top-0 flex justify-center items-center w-screen h-screen z-50">
        <div
            @click="toggle"
            class="fixed bg-slate-900 w-screen h-screen z-0 opacity-90 top-0"
        ></div>
    <div class="bg-white h-screen p-6 shadow-lg rounded-lg w-full md:w-1/3 mx-auto text-center absolute">
        <!-- Logo -->
        <img src="https://stechmax.com/wp-content/uploads/2023/03/logo.webp" alt="Elsie Renewable" class="mx-auto mb-12 w-44 ">

        <!-- Title -->
        <h2 class="text-xl font-bold mb-6">SOLAR POWERED CCTV CAMERA</h2>

        <!-- List of Features with checkmarks -->
        <ul class="text-left mb-6">
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                It functions as a solution with less external wiring than traditional CCTV.
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                It functions as a system that requires little outside support from electricians and other staff.
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                Weather-resistant surveillance for reliable security at any time of year.
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                Rechargeable power to rely on at times when there’s less sunlight.
            </li>
            <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                Save money on electricity bills (while conserving energy for the sun).
            </li>
        </ul>

        <!-- Cancel Button -->
        <button
            @click="toggle"
            class="bg-white w-full text-black border border-green-500 py-2 px-4 rounded-md hover:bg-green-500">
            Cancel
        </button>
    </div>
    </div>
</template>

<script setup>
import {defineEmits} from 'vue'
import GetAQuoteButton from "@/Components/GetAQuoteButton.vue";
let emits = defineEmits(['toggle'])
let toggle = () =>{
    emits('toggle')
}
</script>

<style scoped>
</style>
