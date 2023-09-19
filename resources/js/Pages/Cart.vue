<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Кошик">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Кошик
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <Welcome /> -->
                    <h2>Cart</h2>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
