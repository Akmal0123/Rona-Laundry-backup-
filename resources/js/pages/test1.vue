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
  <div class="bg-gray-50 min-h-screen flex flex-col scroll-smooth">
    <Navbar />

    <main :style="{ marginTop: navbarHeight }" class="flex-grow">
      <!-- Section 1: Hero -->
      <Hero />

      <!-- Section 2: About -->
      <section
        id="about"
        class="relative w-full min-h-screen flex flex-col items-center justify-center text-center px-8 py-24 bg-cover bg-center bg-no-repeat"
        style="background-image: url('/images/pink.jpg');"
      >
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center px-6 gap-10">
          <!-- Gambar kiri -->
          <div class="flex-1 flex justify-center">
            <img
              src="/images/street.jpg"
              alt="Rona Laundry"
              class="rounded-lg shadow-lg w-80 md:w-96 object-cover"
            />
          </div>

          <!-- Teks kanan -->
          <div class="flex-1 text-gray-800">
            <h2 class="text-3xl font-semibold mb-4 text-center md:text-left">
              About <span class="text-pink-600">RonaLaundry</span>
            </h2>
            <p class="mb-3 leading-relaxed">
              Di <span class="font-semibold">Rona Laundry</span>, kami percaya bahwa pakaian bersih
              bukan sekadar kebutuhan, tapi juga cerminan gaya hidup sehat dan nyaman. Karena itu, kami menghadirkan layanan laundry kiloan dan satuan yang cepat, higienis, dan wangi tahan lama.
            </p>
            <p class="leading-relaxed mb-5">
              <span class="font-semibold">Rona Laundry</span> juga melayani pelanggan dari berbagai kalangan,
              mulai dari keluarga, mahasiswa, hingga komunitas. Kami siap membantu siapa pun yang ingin menghemat waktu tanpa khawatir soal cucian.
            </p>
            <div class="flex items-center gap-3 mt-4">
              <span class="text-2xl">⭐</span>
              <span class="italic text-gray-700 font-medium">Jangan Ragu Jangan Bimbang</span>
            </div>
          </div>
        </div>

        <!-- Section Metode Pembayaran -->
        <div class="mt-20 text-center bg-white/80 rounded-xl py-12 px-4 shadow-lg backdrop-blur-sm">
          <h3 class="text-xl font-semibold mb-8 text-gray-800">
            Mau QRIS, transfer, atau cash? <br />
            Semua gampang tinggal gas!
          </h3>

          <!-- 🔹 Grid responsif -->
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-10 justify-items-center mt-6">
            <div class="flex flex-col items-center">
              <img
                src="/images/qris.webp"
                alt="QRIS"
                class="w-32 h-32 md:w-40 md:h-40 object-contain shadow-lg rounded-xl bg-gray-50 p-3 hover:scale-105 transition-transform duration-300"
              />
              <p class="mt-3 font-medium text-gray-700">QRIS</p>
            </div>

            <div class="flex flex-col items-center">
              <img
                src="/images/bsi.png"
                alt="BSI"
                class="w-32 h-32 md:w-40 md:h-40 object-contain shadow-lg rounded-xl bg-gray-50 p-3 hover:scale-105 transition-transform duration-300"
              />
              <p class="mt-3 font-medium text-gray-700">BSI</p>
            </div>

            <div class="flex flex-col items-center">
              <img
                src="/images/bni.jpg"
                alt="BNI"
                class="w-32 h-32 md:w-40 md:h-40 object-contain shadow-lg rounded-xl bg-gray-50 p-3 hover:scale-105 transition-transform duration-300"
              />
              <p class="mt-3 font-medium text-gray-700">BNI</p>
            </div>

            <div class="flex flex-col items-center">
              <img
                src="/images/cash.png"
                alt="Cash"
                class="w-32 h-32 md:w-40 md:h-40 object-contain shadow-lg rounded-xl bg-gray-50 p-3 hover:scale-105 transition-transform duration-300"
              />
              <p class="mt-3 font-medium text-gray-700">Cash</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 3: CTA + Testimoni -->
      <section class="bg-gradient-to-b from-pink-100 to-pink-200 py-20 text-center">
        <button
          class="bg-blue-400 hover:bg-blue-500 text-white font-semibold px-12 py-4 rounded-lg shadow-md text-lg mb-16 transition"
          @click="$inertia.get('/reservasi')"
        >
          PESAN SEKARANG
        </button>

        <h3 class="text-2xl font-semibold text-gray-800 mb-10">APA KATA MEREKA?</h3>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
          <div class="bg-white p-6 rounded-lg shadow text-gray-700">
            <img
              src="/images/cat.jpg"
              alt="User"
              class="w-16 h-16 rounded-full mx-auto mb-4 object-cover"
            />
            <div class="flex justify-center text-yellow-400 mb-3">
              <span v-for="i in 5" :key="i">★</span>
            </div>
            <p>Cepat, tepat, wangi, rapi. Jadi ga perlu mikirin cucian lagi deh.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow text-gray-700">
            <img
              src="/images/chris.png"
              alt="User"
              class="w-16 h-16 rounded-full mx-auto mb-4 object-cover"
            />
            <div class="flex justify-center text-yellow-400 mb-3">
              <span v-for="i in 5" :key="i">★</span>
            </div>
            <p>Pelayanan sangat mantap dan tepat, karena waktu yang saya tentukan.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow text-gray-700">
            <img
              src="/images/asuna.jpg"
              alt="User"
              class="w-16 h-16 rounded-full mx-auto mb-4 object-cover"
            />
            <div class="flex justify-center text-yellow-400 mb-3">
              <span v-for="i in 5" :key="i">★</span>
            </div>
            <p>Pelayanan sangat baik!</p>
          </div>
        </div>
      </section>
    </main>

    <Footer />
  </div>
</template>