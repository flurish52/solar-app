<template>
    <MiniLanding :pageName="pageName"/>


    <section>

        <div class="container mx-auto px-4 py-8 w-3/4">
            <!-- The Challenge Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div>
                    <h2 class="text-2xl font-bold mb-4">The Challenge:</h2>
                    <p class="text-gray-700">
                        Living in Nigeria, you will realize that we are seriously challenged in terms of electricity.
                        Electricity in Nigeria is very unreliable and unstable which leads to under-productivity at
                        days and discomfort at homes. There have been ongoing issues with inconsistent and unreliable electricity...
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="https://www.elsierenewables.energy/_nuxt/img8.ecff22e1.jpg" alt="Challenge" class="rounded shadow-lg w-full md:w-auto">
                </div>
            </div>

            <!-- The Solution Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex justify-center order-2 md:order-1">
                    <img src="https://www.elsierenewables.energy/_nuxt/img8.ecff22e1.jpg" alt="Solution" class="rounded shadow-lg w-full md:w-auto">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-2xl font-bold text-white mb-4">The Solution:</h2>
                    <p class="text-white">
                        Elite Renewable Solutions are designed to be affordable, healthy, and easier to use. Elite Renewable Home Systems are customized to provide stable electricity...
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!--    Our team-->
    <section class=" bg-black md:p-4">
        <h2 class="text-center text-sm font-semibold text-green-500 uppercase">
            Meet the Board
        </h2>
        <h3 class="text-center text-2xl font-bold text-white mb-6">
            Ten years+ of experience in the Energy Industry
        </h3>
      <BoardOfMembers />
    </section>


    <section class="relative bg-cover bg-center bg-gray-900 text-white py-16" style="background-image: url('https://example.com/your-background.jpg')"> <!-- Replace with actual background image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-green-500 uppercase tracking-wider">Sustainable, Reliable and Affordable Energy</h3>
                <h2 class="text-3xl font-extrabold mt-2">We are known for our excellent customer service</h2>
            </div>

            <!-- Feature Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center border border-green-500 p-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3" />
                    </svg>
                    <h4 class="text-lg font-bold">Professional Staff</h4>
                </div>

                <div class="flex flex-col items-center text-center border border-green-500 p-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 10l-5.586-5.586A2 2 0 0012 4V3a2 2 0 00-2 2v1a2 2 0 00-.414 1.586L5 10v4a2 2 0 002 2h10a2 2 0 002-2v-4z" />
                    </svg>
                    <h4 class="text-lg font-bold">Competitive Pricing</h4>
                </div>

                <div class="flex flex-col items-center text-center border border-green-500 p-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12m-8.485 8.485a12 12 0 1116.97 0M12 12m-8.485-8.485a12 12 0 1116.97 0" />
                    </svg>
                    <h4 class="text-lg font-bold">100% Focused</h4>
                </div>

                <div class="flex flex-col items-center text-center border border-green-500 p-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.75 4.5h2.25v2.25H5.75zM5.75 9h2.25v2.25H5.75zM5.75 13.5h2.25v2.25H5.75zM5.75 18h2.25v2.25H5.75zM16 3.25a.75.75 0 01.75.75v16.5a.75.75 0 01-.75.75H9.75a.75.75 0 01-.75-.75V4.5A.75.75 0 019.75 3.75H16z" />
                    </svg>
                    <h4 class="text-lg font-bold">24/5 Support</h4>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "About us",
    layout: GuestLayout,
}
</script>

<script setup>
import MiniLanding from "@/Components/MiniLanding.vue";
import { getCurrentInstance } from 'vue';
import BoardOfMembers from "@/Components/BoardOfMembers.vue";
const instance = getCurrentInstance();
const pageName = instance.type.name; // "Projects"
</script>
