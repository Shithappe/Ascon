<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductCard from '@/Components/ProductCard.vue';

defineProps({
    products: Array
});
</script>

<template>
    <AppLayout title="Головна">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Головна
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="w-4/5 grid grid-cols-3 gap-y-8">
                    <div class="" v-for="product in products" :key="product.id">
                        <ProductCard :product="product" />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
