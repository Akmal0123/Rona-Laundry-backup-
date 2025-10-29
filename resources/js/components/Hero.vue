<template>
  <section class="flex flex-col">

    <!-- 🔹 Hero Utama (Tengah Layar) -->
    <div
      class="bg-pink-100 min-h-screen flex items-center justify-center px-6 md:px-10"
    >
      <div
        class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-6 w-full max-w-5xl"
      >
        <!-- 🔸 Teks -->
        <div class="md:w-1/2 text-right">
          <h1
            class="text-3xl md:text-5xl font-serif text-gray-800 leading-snug md:leading-tight"
          >
            No.1 <br />
            Laundry <br />
            Express di <br />
            Laweyan
          </h1>
        </div>

        <!-- 🔸 Gambar -->
        <div class="md:w-1/2 flex justify-center md:justify-start">
          <img
            src="/images/laundry.png"
            alt="Laundry Illustration"
            class="w-[50%] md:w-[20rem] drop-shadow-lg"
          />
        </div>
      </div>
    </div>

    <!-- 🔹 Grid Layanan (Ukuran Lebih Besar) -->
    <div class="bg-white py-24 flex justify-center items-center">
      <div
        class="max-w-6xl mx-auto px-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 gap-x-18 gap-y-12"
      >
        <div
          class="flex flex-col items-center bg-pink-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/kiloan.png" alt="Kiloan" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Kiloan</p>
        </div>

        <div
          class="flex flex-col items-center bg-blue-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/boneka.png" alt="Boneka" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Boneka</p>
        </div>

        <div
          class="flex flex-col items-center bg-pink-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/karpet.png" alt="Karpet" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Karpet</p>
        </div>

        <div
          class="flex flex-col items-center bg-blue-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/sepatu.png" alt="Sepatu" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Sepatu</p>
        </div>

        <div
          class="flex flex-col items-center bg-pink-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/setrika.png" alt="Setrika" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Setrika</p>
        </div>

        <div
          class="flex flex-col items-center bg-blue-200 rounded-2xl p-8 hover:scale-105 transition"
        >
          <img src="/images/handuk.png" alt="Handuk" class="w-25 mb-4" />
          <p class="font-serif text-xl text-gray-800">Handuk</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Komponen statis
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap");

h1,
p {
  font-family: "Playfair Display", serif;
}
</style>
