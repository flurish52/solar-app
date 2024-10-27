<template>
    <div class="bg-white w-full md:w-full md:mx-5">
        <div class="p-">
            <!-- Header -->
            <h2 class="text-lg font-semibold mb-2">Request a Quote</h2>
            <p class="text-gray-600 mb-6">
                We take great pride in every service that we render and every product that we sell. Control over our products and services ensures our customers receive the best quality service.
            </p>

            <!-- Form -->
            <form @submit.prevent="submitQuote">
                <!-- Name -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2" for="name">Name *</label>
                        <input
                            v-model="form.fullname"
                            type="text"
                            id="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                            required
                        />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2" for="email">Email Address *</label>
                        <input
                            v-model="form.email"
                            type="email"
                            id="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                            required
                        />
                    </div>
                </div>

                <!-- Telephone and Service -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2" for="telephone">Telephone Number *</label>
                        <input
                            v-model="form.telephone"
                            type="tel"
                            id="telephone"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                            required
                        />
                    </div>

                    <!-- Service Dropdown -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2" for="service">Select Service</label>
                        <select
                            v-model="form.service"
                            id="service"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                        >
                            <option value="General Enquiries">General Enquiries</option>
                            <option value="Product Support">Product Support</option>
                            <option value="Sales Inquiry">Sales Inquiry</option>
                        </select>
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-4">
                    <label class="block text-sm font-bold text-gray-700 mb-2" for="message">Message *</label>
                    <textarea
                        v-model="form.message"
                        id="message"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring"
                        rows="4"
                        required
                    ></textarea>
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring"
                >
                    SEND QUOTE
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</template>




<script setup>
import axios from 'axios';
import {useForm} from "@inertiajs/vue3";

// Form object to bind data
let form = useForm({
    fullname: '',
    email: '',
    telephone: '',
    service: 'General Enquiries',
    message: ''
});
let props = defineProps({
    message: String,
})
// Submit form data to backend
// const submitQuote = async () => {
//     try {
//         const response = await axios.post('/sent-message', form);
//         console.log('Message sent:', response.data);
//
//         // Redirect to the alert page
//         this.$inertia.visit('/alert');
//     } catch (error) {
//         console.error('Error submitting quote:', error);
//     }
// };



const submitQuote = async () => {
    try {
        const response = await axios.post('/sent-message', form);
        // Use Inertia's programmatic navigation to the alert page without reloading
        window.location.href='/alert';
    } catch (error) {
        console.error('Error submitting quote:', error);
    }
};
</script>
