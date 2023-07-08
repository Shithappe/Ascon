<script setup>
import Lucide from '@/Components/Lucide.vue'

defineProps({
  title: String
});
</script>

<template>
  <div class="main">
    <h3>{{ title }}</h3>
    <button>
      <Lucide class="w-1 h-1" icon="ShoppingCart" />
      <span>Кошик</span>
    </button>
  </div>
</template>

<style scoped>
.main {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem 0 2rem;
  background-color: white;
  box-shadow: 0px 8px 24px rgba(149, 157, 165, 0.2);
}

button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: .8rem;
  height: fit-content;
  color: rgba(0, 0, 0, 0.7);
  background-color: white;
  border: none;
  outline: none;
  box-shadow: rgba(149, 157, 165, 0.5) 0px 8px 20px;
  padding: 4px 8px;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
}

button span{
  margin-top: 1px;
}
</style>