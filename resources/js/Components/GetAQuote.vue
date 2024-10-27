<template>
    <div
        class="absolute md:fixed h-screen w-screen z-50  flex justify-center items-center md:overflow-hidden "
    >
                    <div class="absolute bg-black w-screen h-2/3 z-0 opacity-70 top-12"
                         @click="toggle"
                    ></div>
        <div class="w-full bg-red-500 md:w-2/3 h-full z-10 top-0 top-10">
            <div class="min-h-screen bg-gray-100 flex justify-center items-center p-4">
                <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-lg relative overflow-y-scroll">
                    <!-- Close Button -->
                    <button
                        @click = 'toggle'
                        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

          <GetAQuoteForm
          />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref, defineEmits} from "vue";
import GetAQuoteForm from "@/Components/GetAQuoteForm.vue";

 let emits  =  defineEmits(['toggle'])
let isHidden = ref("hidden")
let toggle = () =>{
        emits('toggle')
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
