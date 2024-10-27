

<template>

    <div class="w-full h-fit">
        <SecondaryNavBar

            @toggle="toggle"
        />

        <GetAQuote

            :class="{hide: isHidden, show : !isHidden}"

        />




                <PrimaryNavBar />
        <slot>
        </slot>
        <Footer />
            </div>
</template>

<script setup>
import SecondaryNavBar from "@/Components/SecondaryNavBar.vue";
import PrimaryNavBar from "@/Components/PrimaryNavBar.vue";
import Footer from "@/Components/Footer.vue";
import {ref} from "vue";
import GetAQuote from "@/Components/GetAQuote.vue";
let isHidden = ref("hidden", 'overflow-hidden')
let toggle = () =>{
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
