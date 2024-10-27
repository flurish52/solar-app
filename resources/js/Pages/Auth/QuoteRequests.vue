<template>
    <div class="text-green-700 text-center py-4">
        <h1 class="text-3xl text-green-900 font-bold">Quote Requests</h1>
    </div>

    <div class="container mx-auto px-4 py-8 absolute h-fit z-0">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead class="bg-teal-900 text-white">
                <tr>
                    <th class="py-3 px-1 text-left">S/N</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Email Address</th>
                    <th class="py-3 px-6 text-left">Telephone Number</th>
                    <th class="py-3 px-6 text-left">Selected Service</th>
                    <th class="py-3 px-6 text-left">Message</th>
                    <th class="py-3 px-6 text-left">Date</th>
                    <th class="py-3 px-6 text-left">Mark as</th>
                    <th class="py-3 px-6 text-left">Reply</th>
                </tr>
                </thead>
                <tbody class="text-gray-700 h-fit"
                       v-if="updatedQuotes"
                       v-for="(quote, index) in updatedQuotes" :key="index"
                >
                <tr
                    class="border-b hover:bg-gray-100 font-normal"
                    :class="{'read': quote.read, 'font-bold bg-teal-100': !quote.read}"
                    >
                    <td class="py-4 px-1">{{index+1}}</td>
                    <td class="py-4 px-6">{{quote.fullname}}</td>
                    <td class="py-4 px-6">{{ quote.email }}</td>
                    <td class="py-4 px-6">{{ quote.telephone }}</td>
                    <td class="py-4 px-6">{{ quote.service }}</td>
                    <td class="py-4 px-6">{{ quote.message.substring(0, 20) }}...</td>
                    <td class="py-4 px-6 ">{{ formatDateTime(quote.created_at) }}</td>
                    <td class="py-4 px-6 ">
                        <select
                            v-model="quote.read"
                            @change="handleSelectChange($event, quote)"
                            class="bg-none outline-none border-0 focus:outline-none focus:border-0" name="" id="">
                            <option :value="1" :selected="quote.read === 1">Read</option>
                            <option :value="0" :selected="quote.read === 0">Unread</option>
                        </select>
                    </td>
                    <td class="py-4 px-6">
                        <button
                            @click="toggleReply(quote)"
                            class="bg-teal-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-teal-700 focus:outline-none"
                        >
                            Reply
                        </button>
                    </td>
                </tr>
                <tr v-if="!isHidden">
                    <td colspan="7" class="bg-gray-100 p-4">
                        <ReplyQuotationForm
                        @toggle="toggleReply(quote)"
                        :content="quoteToReply"
                        :companyName="companyName"
                        />
                    </td>
                </tr>
                </tbody>
                <tbody class="text-gray-700 h-fit p-1 flex items-center justify-center"
                       v-else>
                        No Quotations yet
                </tbody>


            </table>
        </div>
    </div>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    layout: AuthenticatedLayout,
}
</script>

<script setup>
import { ref, defineProps, watch } from 'vue';
import ReplyQuotationForm from '@/Components/ReplyQuotationForm.vue';

let isHidden = ref(true);

let props = defineProps({
     quotes: Object,
    companyName: String
 })
let updatedQuotes = ref(props.quotes)
let companyName = ref('')
watch(() => props.quotes, (newVal) => {
    updatedQuotes.value = newVal;
});



let  quoteToReply = ref('')
let toggleReply = (quote) => {
    quoteToReply = quote
    companyName.value =  props.companyName
    try {
        axios.patch(`/quote-requests/${quote.id}`, {
            read: true
        });
    } catch (error) {
        alert('Error updating read status:', error);
    }
    isHidden.value = !isHidden.value;
};

let handleSelectChange = (event, quote) => {
    const selectedValue = event.target.value;
    markAsReadOrUnread(selectedValue, quote);
};

let markAsReadOrUnread = async (status, quote) => {
    console.log(quote)
    try {
        await  axios.patch(`/quote-requests/${quote.id}`, {
            read: status === 1 ? true : false, // Convert to true for 'read', false for 'unread'
        });
        alert(`Quote marked as ${status === 1 ? 'Read' : 'Unread'}`);
    } catch (error) {
        alert('Error updating read status:', error);
    }
};
 let formatDateTime = (dateTime) => {
    const date = new Date(dateTime);
    return date.toLocaleString(); // You can customize the format
}

</script>

<style scoped>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 12px;
    text-align: left;
}
th {
    font-weight: bold;
}
tbody tr:hover {
    background-color: #f2f2f2;
}
</style>
