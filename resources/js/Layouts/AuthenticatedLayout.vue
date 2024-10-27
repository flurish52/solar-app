<template>
    <div class="flex min-h-screen">
        <!-- Mobile Menu Button -->
        <div class="lg:hidden fied top-4 left-4 z-50">
            <button @click="toggleSidebar" class="absolute top-0 left-0 bg-teal-900 text-white p-3 rounded-lg shadow-lg">
                <i class="fas fa-bars">Menu</i>
            </button>
        </div>

        <!-- Sidebar (Hidden on Mobile, Fixed on Desktop) -->
        <aside
            :class="[
        'w-64 bg-teal-900 text-white fixed h-full shadow-lg transition-transform lg:translate-x-0',
        sidebarOpen ? 'translate-x-0' : '-translate-x-full'
      ]"
            @click.outside="closeSidebar"
        >
            <div class="p-6 border-b border-teal-700">
                <h1 class="text-2xl font-semibold">Admin Panel</h1>
            </div>
            <nav class="mt-6">
                <ul class="space-y-2">
                    <li>
                        <Link href="/dashboard" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="ml-3">Dashboard</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/products" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-box"></i>
                            <span class="ml-3">All Products</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/products/create" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-plus-circle"></i>
                            <span class="ml-3">Create Products</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/messages" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-envelope"></i>
                            <span class="ml-3">Messages</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/quote-requests" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-file-invoice"></i>
                            <span class="ml-3">Request Quote Users</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/projects" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-folder-open"></i>
                            <span class="ml-3">All Projects</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/projects/create" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-file-medical"></i>
                            <span class="ml-3">Create Projects</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/profile" class="flex items-center py-3 px-4 hover:bg-teal-700 rounded-lg transition-colors">
                            <i class="fas fa-user"></i>
                            <span class="ml-3">View Profile</span>
                        </Link>
                    </li>
                    <li>
                        <button @click="logout" class="flex items-center py-3 px-4 w-full text-left bg-red-600 hover:bg-red-500 text-white rounded-lg transition-colors">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="ml-3">Logout</span>
                        </button>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 p-6 lg:ml-64">
            <MiniNav />
           <slot>

           </slot>
        </main>
    </div>
</template>


<script setup>
import {Link} from "@inertiajs/vue3";
import MiniNav from "@/Components/MiniNav.vue";
</script>
<script>

export default {
    data() {
        return {
            sidebarOpen: false, // Sidebar toggle state
        };
    },
    methods: {
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
        },
        closeSidebar() {
            this.sidebarOpen = false;
        },
        logout() {
            console.log('Logging out...');
        },
    },
};
</script>

<style scoped>
.click-outside {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 999; /* Overlay to manage outside clicks */
}
</style>
