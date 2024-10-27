<template>
    <div class="flex w-full items-center justify-end my-3 px-12">
        <SecondNavContacts />
    </div>
    <footer class="bg-black text-white py-8">


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-between items-center space-y-6 lg:space-y-0">

                <!-- Left side with image -->
                <div class="flex items-center space-x-4">
                    <img
                        src="https://www.elsierenewables.energy/_nuxt/blackeng.936ed20a.jpg"
                    alt="Worker"
                    class="h-full w-20 object-cover"
                    />
                </div>

                <!-- Center section with text and links -->
                <div class="text-center space-y-4 lg:text-left lg:w-1/2 flex">
                    <div>
                        <img src="https://stechmax.com/wp-content/uploads/2023/03/logo.webp" alt="STechMax Solar Solutions" class="h-8 mx-auto lg:mx-0" /> <!-- Replace with the actual logo -->
                        <p class="text-sm">
                            Energy Reserve is a local renewable energy company operating in Liberia. We design, develop, and implement innovative, reliable, and cost-effective electricity generating power solutions for small, medium and large-scale organizations.
                        </p>
                    </div>
                    <div class="hidden md:flex flex-col justify-center lg:justify-start space-x-4 text-sm">
                        <a href="/" class="hover:text-green-500 px-1 mx-1 ">Home</a>
                        <a href="/projects" class="hover:text-green-500 px-1 mx-1 ">Projects</a>
                        <a href="/about" class="hover:text-green-500 px-1 mx-1 ">About</a>
                        <a href="/contact" class="hover:text-green-500 px-1 mx-1 ">Contact</a>
                    </div>
                </div>

                <!-- Right side contact info and social media -->
                <div class="w-full flex flex-col justify-center items-center  space-y-4 text-sm text-center lg:text-right lg:w-1/3">
                    <div class="flex justify-center lg:justify-end space-x-4">
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16.88 3.549A9 9 0 1121 12v0A9 9 0 0112 21h0A9 9 0 013.549 7.12L12 12l4.88-8.451z"
                                    />
                                </svg>
                                <a href="mailto:atuoisrael3@gmail.com" class="hover:text-green-500">info@stechmaxsolar.com</a>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 10v11h8v-5h2v5h8V10L12 3 3 10z"
                                    />
                                </svg>
                                <span>09047766260 / 08147118680</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    class="h-5 w-5"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12h14M5 6h14m-7 6v6"
                                    />
                                </svg>
                                <span>Mon - Fri, 8am to 5pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end space-x-4">
                        <a href="https://web.facebook.com/stechmax/?_rdc=1&_rdr" class="hover:text-green-500 bg-white">
                            <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" class="w-6 h-6">
                        </a>
                        <a href="#" class="hover:text-green-500 bg-white">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-6 h-6">
                        </a>
                        <a href="#" class="hover:text-green-500 bg-white">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer note -->
            <div class="text-center mt-8 text-xs text-gray-400">
                All Rights Reserved, STechMax Solar Solutions ©2022
            </div>
        </div>
    </footer>
</template>

<script>
import SecondNavContacts from "@/Components/SecondNavContacts.vue";

export default {
    name: "FooterComponent",
    components: {SecondNavContacts},
};
</script>

<style scoped>
footer {
    background-color: #000;
}
</style>
