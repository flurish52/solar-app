    <template>
            <!-- Top Bar with Contact Details -->
            <div class="px-4 md:px-24 flex justify-between items-center px-4 py-2 bg-gray-100 text-sm">
                <div class="flex items-center justify-center space-x-4">
                    <!-- Logo -->
                    <a href="/" class="md:flex items-center space-x-2 mx-/cover">
                        <img src="https://stechmax.com/wp-content/uploads/2023/03/logo.webp" alt="Logo" class="w-24">
                    </a>


                        <SecondNavContacts />


                </div>
                <GetAQuoteButton
                @toggle="emitToggle"
                />
            </div>
    </template>

<script  setup>
import {defineEmits} from 'vue'
import GetAQuoteButton from "@/Components/GetAQuoteButton.vue";
import SecondNavContacts from "@/Components/SecondNavContacts.vue";
    let emits = defineEmits(['toggle'])
  let emitToggle = () =>{
      emits('toggle')
  }
    </script>
