<template>
    <div class="text-green-700 text-center py-4">
        <h1 class="text-3xl text-green-900 font-bold">All Products</h1>
    </div>














    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img :src="productImage" alt="Product" class="w-full h-48 object-cover">

                <div class="relative p-4">
                    <!-- Title (Editable Input) -->
                    <input
                        v-model="productTitle"
                        class="text-xl font-semibold text-teal-900 h-6 mb-2 w-full p-1 border rounded border-none m-0"
                        :readonly="!isEditable"
                    />
                    <!-- Description (Editable Textarea) -->
                    <textarea
                        v-model="productDescription"
                        class="text-gray-700 w-full h-12 p-2 border rounded mb-2 border-none"
                        :readonly="!isEditable"
                        rows="3"
                    ></textarea>

                    <!-- Status (Editable Select) -->
                    <select
                        v-model="productStatus"
                        class="w-full p-2 border rounded mb-2 border-none"
                        :disabled="!isEditable"
                    >
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>

                    <!-- File Upload (Visible when editing) -->
                    <div v-if="isEditable" class="mb-2">
                        <label class="block text-gray-700">Change Product Image</label>
                        <input type="file" @change="onImageChange" class="block w-full mt-1 p-2 border rounded">
                    </div>

                    <!-- Edit Product Button -->
                    <button
                        @click="toggleEdit"
                        class="absolut top-0 left-0 bg-teal-600 text-white px-4 py-2 rounded w-full hover:bg-teal-700"
                    >

                        {{ isEditable ? "Save Changes" : "Edit Product" }}
                    </button>
                </div>
            </div>
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img :src="productImage" alt="Product" class="w-full h-48 object-cover">

                <div class="relative p-4">
                    <!-- Title (Editable Input) -->
                    <input
                        v-model="productTitle"
                        class="text-xl font-semibold text-teal-900 h-6 mb-2 w-full p-1 border rounded border-none m-0"
                        :readonly="!isEditable"
                    />
                    <!-- Description (Editable Textarea) -->
                    <textarea
                        v-model="productDescription"
                        class="text-gray-700 w-full h-12 p-2 border rounded mb-2 border-none"
                        :readonly="!isEditable"
                        rows="3"
                    ></textarea>

                    <!-- Status (Editable Select) -->
                    <select
                        v-model="productStatus"
                        class="w-full p-2 border rounded mb-2 border-none"
                        :disabled="!isEditable"
                    >
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>

                    <!-- File Upload (Visible when editing) -->
                    <div v-if="isEditable" class="mb-2">
                        <label class="block text-gray-700">Change Product Image</label>
                        <input type="file" @change="onImageChange" class="block w-full mt-1 p-2 border rounded">
                    </div>

                    <!-- Edit Product Button -->
                    <button
                        @click="toggleEdit"
                        class="absolut top-0 left-0 bg-teal-600 text-white px-4 py-2 rounded w-full hover:bg-teal-700"
                    >

                        {{ isEditable ? "Save Changes" : "Edit Product" }}
                    </button>
                </div>
            </div>
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img :src="productImage" alt="Product" class="w-full h-48 object-cover">

                <div class="relative p-4">
                    <!-- Title (Editable Input) -->
                    <input
                        v-model="productTitle"
                        class="text-xl font-semibold text-teal-900 h-6 mb-2 w-full p-1 border rounded border-none m-0"
                        :readonly="!isEditable"
                    />
                    <!-- Description (Editable Textarea) -->
                    <textarea
                        v-model="productDescription"
                        class="text-gray-700 w-full h-12 p-2 border rounded mb-2 border-none"
                        :readonly="!isEditable"
                        rows="3"
                    ></textarea>

                    <!-- Status (Editable Select) -->
                    <select
                        v-model="productStatus"
                        class="w-full p-2 border rounded mb-2 border-none"
                        :disabled="!isEditable"
                    >
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>

                    <!-- File Upload (Visible when editing) -->
                    <div v-if="isEditable" class="mb-2">
                        <label class="block text-gray-700">Change Product Image</label>
                        <input type="file" @change="onImageChange" class="block w-full mt-1 p-2 border rounded">
                    </div>

                    <!-- Edit Product Button -->
                    <button
                        @click="toggleEdit"
                        class="absolut top-0 left-0 bg-teal-600 text-white px-4 py-2 rounded w-full hover:bg-teal-700"
                    >

                        {{ isEditable ? "Save Changes" : "Edit Product" }}
                    </button>
                </div>
            </div>
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img :src="productImage" alt="Product" class="w-full h-48 object-cover">

                <div class="relative p-4">
                    <!-- Title (Editable Input) -->
                    <input
                        v-model="productTitle"
                        class="text-xl font-semibold text-teal-900 h-6 mb-2 w-full p-1 border rounded border-none m-0"
                        :readonly="!isEditable"
                    />
                    <!-- Description (Editable Textarea) -->
                    <textarea
                        v-model="productDescription"
                        class="text-gray-700 w-full h-12 p-2 border rounded mb-2 border-none"
                        :readonly="!isEditable"
                        rows="3"
                    ></textarea>

                    <!-- Status (Editable Select) -->
                    <select
                        v-model="productStatus"
                        class="w-full p-2 border rounded mb-2 border-none"
                        :disabled="!isEditable"
                    >
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>

                    <!-- File Upload (Visible when editing) -->
                    <div v-if="isEditable" class="mb-2">
                        <label class="block text-gray-700">Change Product Image</label>
                        <input type="file" @change="onImageChange" class="block w-full mt-1 p-2 border rounded">
                    </div>

                    <!-- Edit Product Button -->
                    <button
                        @click="toggleEdit"
                        class="absolut top-0 left-0 bg-teal-600 text-white px-4 py-2 rounded w-full hover:bg-teal-700"
                    >

                        {{ isEditable ? "Save Changes" : "Edit Product" }}
                    </button>
                </div>
            </div>
            <!-- Product Card -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img :src="productImage" alt="Product" class="w-full h-48 object-cover">

                <div class="relative p-4">
                    <!-- Title (Editable Input) -->
                    <input
                        v-model="productTitle"
                        class="text-xl font-semibold text-teal-900 h-6 mb-2 w-full p-1 border rounded border-none m-0"
                        :readonly="!isEditable"
                    />
                    <!-- Description (Editable Textarea) -->
                    <textarea
                        v-model="productDescription"
                        class="text-gray-700 w-full h-12 p-2 border rounded mb-2 border-none"
                        :readonly="!isEditable"
                        rows="3"
                    ></textarea>

                    <!-- Status (Editable Select) -->
                    <select
                        v-model="productStatus"
                        class="w-full p-2 border rounded mb-2 border-none"
                        :disabled="!isEditable"
                    >
                        <option value="Available">Available</option>
                        <option value="Out of Stock">Out of Stock</option>
                    </select>

                    <!-- File Upload (Visible when editing) -->
                    <div v-if="isEditable" class="mb-2">
                        <label class="block text-gray-700">Change Product Image</label>
                        <input type="file" @change="onImageChange" class="block w-full mt-1 p-2 border rounded">
                    </div>

                    <!-- Edit Product Button -->
                    <button
                        @click="toggleEdit"
                        class="absolut top-0 left-0 bg-teal-600 text-white px-4 py-2 rounded w-full hover:bg-teal-700"
                    >

                        {{ isEditable ? "Save Changes" : "Edit Product" }}
                    </button>
                </div>
            </div>



        </div>
    </div>
</template>
    <script setup>
        import { ref } from 'vue';
        // Product data (initial state)
        const productTitle = ref("Product Title");
        const productDescription = ref("This is a short description of the product.");
        const productStatus = ref("Available");
        const productImage = ref("https://via.placeholder.com/300"); // Default product image
        const isEditable = ref(false);

        // Toggle edit mode
        const toggleEdit = () => {
            isEditable.value = !isEditable.value;
        };

        // Handle image change
        const onImageChange = (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    productImage.value = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        };
    </script>

    <script>
    import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    export default {
    name: "Products",
    layout: AuthenticatedLayout,
    }
</script>
