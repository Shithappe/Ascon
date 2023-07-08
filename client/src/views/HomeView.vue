<script setup>
import { Carousel, Slide } from 'vue-carousel';
import Lucide from '@/Components/Lucide.vue'
import TitleBar from "@/components/TitleBar.vue";
</script>

<template>
  <div>
    <TitleBar :title="'ГОЛОВНА ПАНЕЛЬ'" />
    <main>
      <!-- <Carousel>
        <Slide>
          Slide 1 Content
        </Slide>
        <Slide>
          Slide 2 Content
        </Slide>
      </Carousel> -->
      
      <div class="main-block">
        <div>
          <div class="caro"></div>
          <div class="search">
            <input type="text" placeholder="Пошук по артикулу або за назвою">
            <button>
              <Lucide :size:="2" icon="Search" />
            </button>
          </div>
          <div class="list"></div>
        </div>
        <div class="user">
          <Lucide :size="80" :stroke-width="1" icon="UserCircle2" />
          <div class="user-info">
            <span>name</span>
            <span class="gray">position</span>
            <span>number</span>
            <span class="email">email</span>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<style scoped>
main{
  margin: 2rem;
}
.main-block{
  display: flex;
  flex-direction: row;
}
.user{
  display: flex;
  flex-direction: row;
  background-color: white;
  height: min-content;
  width: 20rem;
  margin-left: 2rem;
  padding: 1rem;
}
.user-info{
  display: flex;
  flex-direction: column;
  margin-left: 1rem;
  font-size: large;
}
.user-info span{
  margin: .4rem 0;
}
.gray{
  color: rgb(178, 178, 178);
  font-size: 14px;
}
.email{
  color: blue;
  /* font-size: 14px; */
}
.caro{
  width: 65rem;
  height: 25rem;
  background-color: rgb(200, 200, 200);
}

.search{
  display: flex;
  align-items: center;
  width: 63rem;
  padding: 1rem;
  margin-top: 2rem;
  background-color: white;
}
.search input{
  height: 3rem;
  width: 97%;
  border: 1px solid rgba(0, 0, 0, 0.2);
}
.search input::placeholder{
  padding: 1rem;
  height: 8px;
  line-height: 0.8;
}
.search button{
  height: 3.3rem;
  width: 3.3rem;
  border: none;
  outline: none;
  background-color: rgba(128, 128, 128, 0.2);
}

.list{
  margin-top: 5px;
  width: 65rem;
  height: 10rem;
  background-color: white;
}
</style>
