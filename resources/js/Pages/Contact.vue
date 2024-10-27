<template>
    <MiniLanding :pageName="pageName"/>

    <div class="min-h-screen bg-gray-100 py-8 px-4 mb-12">
            <div class="py-8 px-4 bg-gray-100">
                <div class="flex flex-wrap justify-center gap-6">
                    <!-- Facebook -->
                    <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" class="w-6 h-6">
                        <a href="https://facebook.com" target="_blank" class="text-gray-800 font-semibold">STechMax Solar</a>
                    </div>

                    <!-- LinkedIn -->
                    <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-6 h-6">
                        <a href="https://linkedin.com" target="_blank" class="text-gray-800 font-semibold">STechMax Solar</a>
                    </div>

                    <!-- Instagram -->
                    <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" class="w-6 h-6">
                        <a href="https://instagram.com" target="_blank" class="text-gray-800 font-semibold">@stechmax_solar</a>
                    </div>
                </div>
            </div>

        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Map Section -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="w-full h-full bg-red-50">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.571991443882!2d9.165464!3d6.6703862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105bdfe75e895505%3A0x55114064b418cab1!2sSUCCESS%20COMPUTERS!5e0!3m2!1sen!2sng!4v1696940909051!5m2!1sen!2sng"
                            class="w-full h-full"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="w-full mt-5">
                            <div class="h-24 mb-12 overflow-hidden mb-12">
                            <p class="text-sm font-normal text-gray-500 mb-1">Our Locations</p>
                            <ul class="text-sm font-semibold text-gray-600">
                                <li>1. No 27 Calabar Road, Obudu Cross River state.</li>
                                <li>2. No one Calabar Lane, Off Hospital Road, Obudu Cross River State.</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Send Us a Message</h2>
                    <p class="mb-6 text-gray-600">
                        We have a team of experts and excellent customer service personnel ready to assist you with any enquiries you may have for us. Leave a message and we will get back to you in the shortest possible time.
                    </p>

                    <form @submit.prevent="sendMessage">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                            <input
                                type="text"
                                id="name"
                                v-model="form.name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                                placeholder="Your name"
                                required
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address</label>
                            <input
                                type="email"
                                id="email"
                                v-model="form.email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                                placeholder="Your email"
                                required
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Telephone Number</label>
                            <input
                                type="tel"
                                id="phone"
                                v-model="form.phone"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                                placeholder="Your phone number"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                            <textarea
                                id="message"
                                v-model="form.message"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                                rows="4"
                                placeholder="Your message"
                                required
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring w-full"
                        >
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";

export default {
    name: "Contact us",
    layout: GuestLayout,
    data() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                message: '',
            },
        };
    },
    methods: {
        sendMessage() {
            console.log(this.form);
            alert('Message sent successfully!');
            // Handle form submission (e.g., send data to a backend or API)
        },
    },
};
</script>

<script setup>
import { getCurrentInstance } from 'vue';
const instance = getCurrentInstance();
const pageName = instance.type.name; // "Projects"
import MiniLanding from "@/Components/MiniLanding.vue";

</script>
