<template>
    <header class="bg-teal-900 text-white shadow-lg px-6 py-4 flex justify-between items-center">
        <!-- Left Section (User's Name) -->
        <div class="text-lg font-semibold">
            Welcome, {{ $page.props.auth.user.name}}
        </div>

        <!-- Right Section (User Picture + Dropdown) -->
        <div class="relative" @click.outside="closeDropdown">
            <!-- User Button (Round Picture + Caret) -->
            <button @click="toggleDropdown" class="flex items-center focus:outline-none">
                <img
                    :src="userPicture"
                    alt="User"
                    class="w-10 h-10 rounded-full border-2 border-white"
                />
                <i class="fas fa-caret-down ml-2">menu</i>
            </button>

            <!-- Dropdown Menu -->
            <div
                v-if="dropdownOpen"
                class="absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-lg shadow-lg z-50"
            >
                <ul>
                    <li>
                        <Link href="/profile" class="block px-4 py-2 hover:bg-gray-200 rounded-t-lg">
                            View Profile
                        </Link>
                    </li>
                    <li>
                        <Link href="/settings" class="block px-4 py-2 hover:bg-gray-200">
                            Settings
                        </Link>
                    </li>
                    <li>
                        <button @click="logout" class="block w-full text-left px-4 py-2 hover:bg-gray-200 rounded-b-lg">
                            Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>


<script setup>
import {Link} from "@inertiajs/vue3";

</script>
<script>
export default {
    components: {
    },
    data() {
        return {
            dropdownOpen: false, // Controls dropdown visibility
            userName: "John Doe", // Replace this with dynamic user data
            userPicture: "https://via.placeholder.com/150", // Placeholder image for user, replace with actual image URL
        };
    },
    methods: {
        toggleDropdown() {
            this.dropdownOpen = !this.dropdownOpen;
        },
        closeDropdown() {
            this.dropdownOpen = false;
        },
        logout() {
            console.log('Logging out...');
        },
    },
};
</script>


<style scoped>
/* Align the dropdown menu below the button */
.relative {
    position: relative;
}

.absolute {
    position: absolute;
    right: 0;
    top: 100%; /* Aligns the dropdown right below the button */
}

/* Custom styles for the dropdown */
.dropdown-menu {
    display: none; /* Initially hidden */
}

.dropdown-menu.show {
    display: block; /* Show when dropdownOpen is true */
}
</style>
