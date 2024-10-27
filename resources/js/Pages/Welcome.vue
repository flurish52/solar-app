

<template>
    <div class="fixed top-0 z-50">
    <ProductDisplayDialogue
        @toggle="emitToggle"

        :class="{hide: isHidden, show : !isHidden}"
    />
    </div>
<!--Landing section-->
        <section class="relative bg-cover bg-center overlay bg-blend-multiply px-4 md:px-24 " :style="{ backgroundImage: 'url(https://www.elsierenewables.energy/_nuxt/img9.095932e5.jpg)' }">
            <div class="relative z-10 flex flex-col justify-center items-center md:items-start px-4  h-screen">
                <h1 class="text-white text-3xl md:text-6xl font-bold mb-4 md:w-1/2 text-center md:text-left">Providing Renewable Power Solutions</h1>
                <p class="text-white text-md md:text-lg max-w-xl mb-6 text-center md:text-left">
                    We design, develop, and implement innovative, reliable, and cost-effective electricity generating power solutions for small, medium, and large-scale organizations.
                </p>
                <div>
                    <a href="#request-quote">
                        <button
                            class="bg-green-600 text-white px-4 py-2 rounded">GET QUOTE</button>
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </section>

    <div class="px-4 md:px-24">
<!-- providing Clean, Reliable, and Cost-effective Energy Solutions Across Nigeria -->
    <section class="py-12 bg-white">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Left Text Section -->
            <div class="flex flex-col items-center justify-center md:items-start text-center md:text-left w-full md:w-1/2 md:pr-6 mb-6 md:mb-0">
                <h2 class="text-green-500 text-sm font-semibold mb-2">LEADING THE WAY IN RENEWABLE ENERGY IN NIGERIA</h2>
                <h1 class="text-3xl md:text-4xl font-bold mb-4">
                    Providing Clean, Reliable, and Cost-effective Energy Solutions Across Nigeria
                </h1>
                <p class="text-gray-600 mb-6">
                    STechMax Solar Solutions' goal is to provide reliable, clean, and cost-effective energy solutions to Nigeria. Our solutions provide superior renewable energy design and innovative options that enable significant savings on our clients' energy bills.
                </p>
                <p class="text-gray-600 mb-6">
                    We achieve this through the introduction of reliable and highly cost-effective clean energy solutions to our clients' energy mix by offering superior hybrid design and innovative financing options.
                </p>
                <a href="/about" class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg shadow hover:bg-green-600 focus:outline-none">
                    More About Us
                </a>
            </div>

            <!-- Right Image Section -->
            <div class="w-full md:w-1/2 flex flex-col items-center">
                <div class="flex space-x-8">
                    <div class="text-center bg-gray-100 p-3 m-2">
                        <span class="block text-2xl font-bold text-green-600">200+</span>
                        <span class="text-gray-600">Projects</span>
                    </div>
                    <div class="text-center bg-gray-100 p-3 m-2">
                        <span class="block text-2xl font-bold text-green-600">1000+</span>
                        <span class="text-gray-600">Satisfied Clients</span>
                    </div>
                </div>
                <img src="https://www.elsierenewables.energy/_nuxt/img9.095932e5.jpg" alt="Solar Panel Installation" class="rounded-lg shadow-md mb-6 md:mb-0" />
            </div>
        </div>
    </section>
<!--        We have the following products on sale  -->
    <section class="my-10">
            <h2 class="text-center text-2xl font-bold mb-6">
                We have the following products on sale
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Product Card 1 - Solar Powered CCTV Camera -->
                <div
                    @click="emitToggle"
                    class="flex flex-col items-center pb-6 shadow-lg rounded-lg bg-green-600 hover:bg-green-400">
                    <img
                        src="https://www.elsierenewables.energy/_nuxt/cctv.ba234937.jpeg"
                        alt="Solar Powered CCTV Camera"
                        class="w-full h-40 object-cover mb-4"
                    />
                    <h3 class="text-lg text-white font-semibold">Solar Powered CCTV Camera</h3>
                    <button
                        class="mt-4 py-2 px-4 bg-green-600 text-white font-bold rounded-full"
                    >
                        More Info
                    </button>
                </div>

                <!-- Product Card 2 - Solar Powered Fans -->
                <div
                    @click="emitToggle"
                    class="flex flex-col items-center pb-6 shadow-lg rounded-lg bg-green-600 hover:bg-green-400">
                    <img
                        src="https://www.elsierenewables.energy/_nuxt/fans.7c33fb7b.jpeg"
                        alt="Solar Powered Fans"
                        class="w-full h-40 object-cover mb-4"
                    />
                    <h3 class="text-lg text-white font-semibold">Solar Powered Fans</h3>
                    <button
                        class="mt-4 py-2 px-4 bg-green-600 text-white font-bold rounded-full"
                    >
                        More Info
                    </button>
                </div>

                <!-- Product Card 3 - Solar Powered Lights -->
                <div
                    @click="emitToggle"
                    class="flex flex-col items-center pb-6 shadow-lg rounded-lg bg-green-600 hover:bg-green-400">
                    <img
                        src="https://www.elsierenewables.energy/_nuxt/lights.e36e643d.jpeg"
                        alt="Solar Powered Lights"
                        class="w-full h-40 object-cover mb-4"
                    />
                    <h3 class="text-lg font-semibold text-white">Solar Powered Lights</h3>
                    <button
                        class="mt-4 py-2 px-4 bg-green-600 text-white font-bold rounded-full"
                    >
                        More Info
                    </button>
                </div>
            </div>
        </section>

<!--    Energize Society With Renewable Energy  -->
    <section class="my-10">
        <h2 class="text-center text-sm font-semibold text-green-500 uppercase">
            Energize Society With Renewable Energy
        </h2>
        <h3 class="text-center text-2xl font-bold mb-6">
            We also offer a full complement of project development services
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Planning & Development -->
            <div                  @click="emitToggle"
                 class="flex flex-col items-center pb-6 shadow-lg rounded-lg bg-green-600 hover:bg-green-400">
                <img
                    src="https://img.freepik.com/free-photo/close-up-environment-project_23-2148894106.jpg?t=st=1667647377~exp=1667647977~hmac=6cae41e91194bc769f48af4ff0a4e2a128c4391c1e88a43712b4358abc84d99f"
                    alt="Planning and Development"
                    class="w-full h-40 object-cover mb-4"
                />

                <h3 class="text-2xl text-white font-bold">Planning & Development</h3>
                <button
                    class="mt-4 py-2 px-4 bg-green-600 text-white font-bold rounded-full"
                >
                    More Info
                </button>
            </div>

            <!-- Card 2: Energy Saving Services -->
            <div
                @click="emitToggle"
                class="flex flex-col items-center pb-6 bg-green-600 shadow-lg rounded-lg hover:bg-green-400">
                <img
                    src="https://images.pexels.com/photos/1495580/pexels-photo-1495580.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt="Energy Saving Services"
                    class="w-full h-40 object-cover mb-4"
                />
                <h3 class="text-2xl text-white font-bold">Energy Saving Services</h3>
                <button
                    class="mt-4 py-2 px-4 bg-green-600 text-white font-bold rounded-full"
                >
                    More Info
                </button>
            </div>
        </div>
    </section>


<!--Our team -->
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
            <!--white line-->
            <div class="flex justify-center items-center">
                <div class="w-5/6 mb-3 bg-white h-px md:px-4"></div>
            </div>

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



        <section class=" bg-slate-900 pb-12">
<!--            white line -->
            <div class="flex justify-center items-center">
            <div class="w-5/6 bg-white h-px md:px-4"></div>
            </div>
            <div class="my-3 md:mx-4">

            </div>
            <div class="md:flex w-full md:px-10">
                    <div class="bg-white p-12">
                        <GetAQuoteForm
                        id="request-quote"
                        />

                    </div>
                        <div class="bg-white p-6 shadow-lg rounded-lg w-full md:w-1/3 md:mx-5">
                            <h2 class="text-xl font-bold mb-4">Contact Info</h2>
                            <div class="mb-4">
                                <h3 class="text-gray-700 font-semibold">Our Location</h3>
                                <p>No 27 Calabar Road, Obudu Cross River state.</p>
                            </div>
                            <div class="mb-4">
                                <h3 class="text-gray-700 font-semibold">Email us on</h3>
                                <p><a href="mailto:info@stechmaxsolar.com"
                                      class="text-blue-600 underline">info@stechmaxsolar.com</a></p>
                            </div>
                            <div class="mb-4">
                                <h3 class="text-gray-700 font-semibold">Call us on</h3>
                                <p><a href="tel:+2349078082348" class="text-blue-600 underline">(+234)  907 808 2348</a> / <a href="tel:+2349078082348" class="text-blue-600 underline">907 808 2348</a></p>
                            </div>
                            <div class="mb-4">
                                <h3 class="text-gray-700 font-semibold">Working Hours</h3>
                                <p>Monday - Friday - 08:00 am to 05:00 pm</p>
                            </div>
                            <p class="text-gray-600">Do you have any questions you may need help with? Then contact us to get help instantly.</p>
                            <a href="/contact">

                                <button class="bg-green-600 text-white font-bold py-2 px-4 mt-4 rounded-md hover:bg-green-700 focus:outline-none">CONTACT US</button>
                            </a>
                        </div>


            </div>
        </section>
    </div>
    <div class="h-24"></div>




</template>
<script >
import GuestLayout from "@/Layouts/GuestLayout.vue";
export default {
    layout: GuestLayout,
}
</script>

<script setup>
import {useForm} from "@inertiajs/vue3";
import {ref} from "vue";
import BoardOfMembers from "@/Components/BoardOfMembers.vue";
import GetAQuoteButton from "@/Components/GetAQuoteButton.vue";
import GetAQuoteForm from "@/Components/GetAQuoteForm.vue";
import ProductDisplayDialogue from "@/Components/ProductDisplayDialogue.vue";
import GetAQuote from "@/Components/GetAQuote.vue";
let formData = useForm({
     name: "",
     email: "",
     subject: "",
     message: ""
 })

let isHidden = ref("hidden")
let emitToggle = () =>{
    console.log('Hide')
    isHidden.value = !isHidden.value
}
</script>



<style scoped>
.show{
    display: flex;
}

.hide{
    display: none;
}

</style>
