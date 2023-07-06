<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <header>
    <div >
      <nav>
        <div>
          <RouterLink to="/">Home</RouterLink>
          <RouterLink to="/about">About</RouterLink>
        </div>
        <div class="right-info">
          <input type="text" placeholder="Пошук за каталогом...">
          <div>ФОП</div>
        </div>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style scoped>
nav{
  height: 2rem;
  display: flex;
  gap: 1rem;
  justify-content: space-between;
  align-items: center;

  padding: 1rem 4rem;

  color: white;
  border: 1px solid black;
  background-color: #2f323e;
}

.right-info{
  display: flex;
  gap: 1rem;
  align-items: center;
}
nav input{
  min-width: 12rem;
  border-radius: 5px;
  min-height: 2rem;
}
nav input::placeholder {
  padding: 0.5rem;
}
</style>