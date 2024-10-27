<template>
<MiniLanding :pageName="pageName"/>
    <div class="px-4 md:px-24 h-fit">
        <section class="text-center py-10 bg-white">
            <h2 class="text-2xl md:text-3xl font-bold mb-8">We have worked on a number of awesome projects</h2>
            <div class="flex justify-center space-x-4">
                <div class="bg-green-50 p-6 rounded-lg text-center shadow-md">
                    <p class="text-4xl font-bold text-green-500">200+</p>
                    <p class="text-lg font-medium">Projects</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg text-center shadow-md">
                    <p class="text-4xl font-bold text-green-500">1000+</p>
                    <p class="text-lg font-medium">Satisfied Customers</p>
                </div>
            </div>
        </section>
        <cards />

    </div>
    <SecondaryNavBar />

</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "Projects",
    layout: GuestLayout,
}
</script>

<script setup>
import SecondaryNavBar from "@/Components/SecondaryNavBar.vue";
import Cards from "@/Components/cards.vue";
import MiniLanding from "@/Components/MiniLanding.vue";
import { getCurrentInstance } from 'vue';
const instance = getCurrentInstance();
const pageName = instance.type.name; // "Projects"
</script>
