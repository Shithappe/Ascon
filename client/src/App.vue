<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Lucide from '@/Components/Lucide.vue'

</script>

<template>
  <div class="bg-black">
    <header>
      <div class="side-menu">
        <RouterLink to="/">
          <Lucide class="w-10 h-10" icon="AlignJustify" />
        </RouterLink>
        <RouterLink to="/about">
          <Lucide class="w-10 h-10" icon="Gauge" />
        </RouterLink>
        <a href="#">
          <Lucide class="w-10 h-10" icon="Folders" />
        </a>
        <a href="#">
          <Lucide class="w-10 h-10" icon="ShoppingCart" />
        </a>
        <a href="#">
          <Lucide class="w-10 h-10" icon="Undo2" />
        </a>
      </div>
      <nav>
        <div class="logo">
          logo
          <img src="" alt="">
          <!-- <RouterLink to="/">Home</RouterLink>
          <RouterLink to="/about">About</RouterLink> -->
        </div>
        <div class="right-info">
          <input type="text" placeholder="Пошук за каталогом...">
          <Lucide class="w-10 h-10" icon="User" />
          <div>ФОП *****</div>
        </div>
      </nav>
    </header>

    <div class="main-content">
      <RouterView />
    </div>
  </div>
</template>

<style scoped>
.main-content {
  margin-left: 4rem;
}

nav {
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

.logo {
  margin-left: 2rem;
  width: 4rem;
  height: 4rem;
  background-color: white;
  color: black
}

.right-info {
  display: flex;
  gap: 1rem;
  align-items: center;
}

nav input {
  min-width: 12rem;
  border-radius: 5px;
  min-height: 2rem;
}

nav input::placeholder {
  padding: 0.5rem;
}


.side-menu {
  position: fixed;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100vh;
  width: 4rem;
  background-color: white;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.side-menu a {
  width: 100%;


  padding: 1.2rem 0;
  transition: all .2s;
}

.side-menu a:hover {
  background-color: rgba(0, 0, 0, 0.2);
}

.side-menu a * {
  margin: 0 1.2rem;
}</style>