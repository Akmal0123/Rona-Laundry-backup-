<script setup>
import { ref, onMounted } from 'vue'
import Navbar from '../components/Navbar.vue'
import Hero from '../components/Hero.vue'
import Footer from '../components/Footer.vue'

const navbarHeight = ref('0px')

onMounted(() => {
  const navbar = document.querySelector('nav')
  if (navbar) {
    navbarHeight.value = navbar.offsetHeight + 'px'
  }
})
</script>

<template>
  <div class="bg-gray-50 min-h-screen flex flex-col">
    <Navbar />
    <main :style="{ marginTop: navbarHeight }" class="flex-grow">
      <Hero />
    </main>
    <Footer />
  </div>
</template>

