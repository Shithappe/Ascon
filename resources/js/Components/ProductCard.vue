<script setup>
defineProps({
    product: Object,
});

// console.log(product.name);
</script>

<template>
    <div class="w-72 bg-white border rounded-lg shadow hover:scale-105 hover:shadow-lg transition ease-in-out duration-200">
        <img class="" :src="product.image" alt="">
        <div class="ml-2 p-1">
            <div>{{ product.name }}</div>
            <div class="text-right mr-2"><b>{{ product.price }} грн</b></div>
        </div>
        <div class="my-2 flex justify-center">
            <button class="w-11/12 mx-auto px-2 py-1 border shadow rounded-lg">Додати у корзину</button>
        </div>
    </div>
</template>
