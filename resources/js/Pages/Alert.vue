<template>
    <div class=" w-full md:w-1/2  flex flex-col items-center justify-center h-fit mx-auto p-6 bg-white shadow-lg rounded-lg flex items-start space-x-4">
        <!-- Celebration Icon (SVG) -->
        <div class=" p-4 rounded-full text-green-600">
            <img src="https://png.pngtree.com/png-vector/20220520/ourmid/pngtree-happy-emoji-emoticon-showing-double-thumbs-up-like-png-image_4708251.png"
                 alt=""
                 class="w-full h-full"
            >
        </div>

        <!-- Message Content -->
        <div>
            <h3 class="text-3xl font-semibold text-gray-800">Message Sent Successfully!</h3>
            <p class="mt-2 text-gray-600 text-xl">We’ve received your message and will get back to you shortly.</p>

            <!-- Message Received Icon (SVG) -->
            <Link href="/">
                    <div class="mt-3 text-blue-500 flex items-center space-x-2">
                        <span class="font-medium">Return to Home</span>
                    </div>
                </Link>
        </div>

    </div>
</template>

<script>


import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    layout: GuestLayout,
    components: {
        Link,
    },
    data() {
        return {
            showAlert: true, // Control whether the alert is visible
        };
    },
    methods: {
        closeAlert() {
            this.showAlert = false; // Close the alert when the button is clicked
        },
    },
};

setTimeout(() => {
    window.location.href = '/';
}, 5000); //
</script>

<style scoped>
/* You can add any additional styling here if necessary */
</style>
