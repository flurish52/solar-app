<template>


    <!-- Replying to quotation -->
    <div class="fixed bg-black w-screen h-screen z-0 opacity-70 top-0 left-0"
         @click="toggle"
    ></div>
    <div class="container w-fit px-4 py-8 absolute top-0 left-0 "
         >
        <div class="w-full md:w-3/4 mx-auto bg-white shadow-lg rounded-lg p-6 relative">

            <h2 class="text-2xl font-bold text-teal-900 mb-4">{{  quotation.subject }} {{ props.content.service }}</h2>

            <p class="mb-4">Dear <strong>{{ props.content.fullname }}</strong>,</p>

            <p class="mb-4">
                {{quotation.quotationClossing}}
            </p>

            <table class="w-full text-left mb-4">
                <tr>
                    <th class="font-semibold text-gray-700 py-2">Enquiry</th>
                    <td class="py-2">{{ props.content.service }}</td>
                </tr>
                <tr>
                    <th class="font-semibold text-gray-700 py-2">Estimated Cost:</th>
                    <td class="py-2">$<input type="text" v-model="form.cost"></td>
                </tr>
                <tr>
                    <th class="font-semibold text-gray-700 py-2">Delivery Timeline:</th>
                    <td class="py-2"><input type="text" v-model="form.deliveryDate"> in days</td>
                </tr>
                <tr>
                    <th class="font-semibold text-gray-700 py-2">Contact:</th>
                    <td class="py-2">{{ props.content.telephone }}</td>
                </tr>
                <tr>
                    <th class="font-semibold text-gray-700 py-2">Message:</th>
                    <td class="py-2">{{ props.content.message }}</td>
                </tr>
            </table>

            <p class="mb-4">
                {{quotation.quotationClossing}}
            </p>

            <p class="mb-4">
                We look forward to assisting you further.
            </p>

            <p class="font-bold">Best regards,</p>
            <p> <strong>{{ props.companyName }}</strong> </p>

            <button

                @click="sendQuotation"
                class="bg-teal-900 w-full text-white font-bold py-2 px-4 rounded-lg mt-4"
            >
                Send
            </button>
            <button
                @click="toggle"
                class="bg-red-600 w-full text-white font-bold py-2 px-4 rounded-lg mt-4"
            >
                Cancel
            </button>
        </div>

    </div>
</template>

<script>
export default {
    name: "ReplyQuotationForm",
}
</script>
<script setup>

import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

let quotation = ref({
    subject: 'Quotation for',
        quotationMessage: "Thank you for reaching out to us with your enquiry. Below is a quotation based on the details you have provided:",
        quotationClossing: "Please feel free to reply to this email if you have any further questions or need additional clarification."


})


let emits = defineEmits('toggle')

let props = defineProps({
    content: Object,
    companyName: String
})
let toggle = () =>{
    emits('toggle')
}

let form = useForm({
    deliveryDate: '',
    cost: '',
})


let sendQuotation = () => {
    axios.post('/quotation/send', {
        name: props.content.fullname,
        email: props.content.email,
        service: props.content.service,
        telephone: props.content.telephone,
        message: props.content.message,
        deliveryDate: form.deliveryDate + ' days',
        cost: "$" + form.cost,
        headMessage: quotation.value.quotationMessage,
        clossingMessage: quotation.value.quotationClossing,
        subject: quotation.value.subject + " " + props.content.service
    })
        .then(res => {
            if (res.status === 200) {
                emits('toggle');
            } else {
                alert('There was an issue sending the quotation. Please try again.');
            }
        })
        .catch(error => {
            // Handle error response
            console.error('Error sending quotation:', error);
            alert('An error occurred while sending the quotation. Please check the details and try again.');
        });
};


</script>

<style scoped>
.show{
    display: flex;
}

.hide{
    display: none;
}

</style>
