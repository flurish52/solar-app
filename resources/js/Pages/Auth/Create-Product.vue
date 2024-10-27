
<template>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-teal-900 text-center mb-8">Create New Product</h1>

        <div class="bg-white shadow-md rounded-lg p-6 max-w-lg mx-auto">
            <!-- Product Title -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">Product Title</label>
                <input
                    type="text"
                    id="title"
                    placeholder="Enter product title"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:border-teal-600"
                />
            </div>

            <!-- Product Description -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="description">Product Description</label>
                <textarea
                    id="description"
                    rows="4"
                    placeholder="Enter product description"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:border-teal-600"
                ></textarea>
            </div>

            <!-- Product Importance (Dynamic Input Fields) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Product Importance</label>
                <p class="block text-gray-700 text-sm italicise">Click on the add button to add importance</p>
                <div v-for="(importance, index) in importances" :key="index" class="flex items-center mb-2">
                    <input
                        v-model="importances[index]"
                        type="text"
                        placeholder="Enter importance"
                        class="w-full p-3 border rounded-lg focus:outline-none focus:border-teal-600"
                    />

                    <!-- Remove Button for each field -->
                    <button
                        @click="removeImportance(index)"
                        type="button"
                        class="ml-2 bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 focus:outline-none">
                        Remove
                    </button>
                </div>

                <!-- Add Button (only one, shown after all fields) -->
                <div class="flex justify-end">
                    <button
                        @click="addImportance"
                        type="button"
                        class="bg-teal-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-teal-700 focus:outline-none">
                        Add
                    </button>
                </div>
            </div>

            <!-- Product Price -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="price">Product Price ($)</label>
                <input
                    type="number"
                    id="price"
                    placeholder="Enter product price"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:border-teal-600"
                />
            </div>

            <!-- Product Status -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="status">Product Status</label>
                <select
                    id="status"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:border-teal-600"
                >
                    <option value="Available">Available</option>
                    <option value="Out of Stock">Out of Stock</option>
                </select>
            </div>

            <!-- Product Image Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="image">Product Image</label>
                <input
                    type="file"
                    id="image"
                    class="block w-full text-gray-700 p-2 border rounded-lg focus:outline-none focus:border-teal-600"
                />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-teal-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-teal-700 focus:outline-none focus:ring focus:ring-teal-300">
                    Create Product
                </button>
            </div>
        </div>
    </div>


</template>

<script setup>
import { ref } from 'vue';

const importances = ref([""]);  // Array to hold importance fields

const addImportance = () => {
    importances.value.push("");  // Adds a new empty field to the array
};

// Function to remove a specific importance field
const removeImportance = (index) => {
    importances.value.splice(index, 1);  // Removes the field at the given index
};
</script>

<script>
 import authenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

 export default {
     layout: authenticatedLayout,
 }
</script>
