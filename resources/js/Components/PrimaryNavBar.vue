<template>
    <!-- Navigation Bar -->
    <nav class="px-4 top-12 z-50 left-0 w-full  md:px-24 bg-black text-white flex flex-row justify-left items-center">
        <div class="flex justify-center items-center px-4 py-3 ">
            <!-- Links -->
            <ul class="flex w-full top-10 left-0 md:flex md:space-x-4 z-40 justify-between items-left md:justify-left bg-black md:px-6">
                <li class="mx-1"><a href="/" class="flex py-4 hover:text-green-600">HOME</a></li>
                <li class="mx-1"><a href="/projects" class=" flex py-4 hover:text-green-600">PROJECTS</a></li>
                <li class="mx-1"><a href="/about" class=" flex py-4 hover:text-green-600">ABOUT</a></li>
                <li class="mx-1"><a href="/contact" class=" flex py-4 hover:text-green-600">CONTACT</a></li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: "PrimaryNavBar"
}
</script>


<script setup>
    import {ref} from "vue";

    let isOpen = ref(false)
    let toggle = () =>{
        isOpen.value = !isOpen.value
    }
</script>
