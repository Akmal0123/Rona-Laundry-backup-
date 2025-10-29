<script setup>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import Hero from '../components/Hero1.vue'
import { ref } from 'vue'

const nama = ref('')
const whatsapp = ref('')
const layanan = ref('')
const barang = ref('')
const alamat = ref('')
const pembayaran = ref('')
const tanggal = ref('')

const submitForm = () => {
  alert('Pesanan berhasil disimpan! 😊')
}
</script>

<template>
  <div class="bg-pink-100 min-h-screen flex flex-col pt-15">
    <!-- Navbar -->
    <Navbar />

    <!-- Hero Section -->
    <Hero />

    <!-- Main Content -->
    <main class="flex-grow py-16 px-6 flex justify-center items-start">
      <div
        class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-3xl border border-pink-200"
      >
        <h2 class="text-3xl font-semibold mb-8 text-gray-800 text-center">
          Reservasi Layanan
        </h2>

        <!-- Form -->
        <form
          @submit.prevent="submitForm"
          class="grid grid-cols-1 gap-y-5 text-gray-700"
        >
          <!-- Nama -->
          <div>
            <label class="block font-medium mb-1">Nama Lengkap</label>
            <input
              v-model="nama"
              type="text"
              placeholder="Masukkan nama Anda"
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-pink-400 outline-none"
              required
            />
          </div>

          <!-- WhatsApp -->
          <div>
            <label class="block font-medium mb-1">Nomor WhatsApp</label>
            <input
              v-model="whatsapp"
              type="tel"
              placeholder="08123456789"
              inputmode="numeric"
              pattern="[0-9]*"
              maxlength="15"
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-pink-400 outline-none"
              @input="whatsapp = whatsapp.replace(/[^0-9]/g, '')"
              required
            />
          </div>

          <!-- Layanan -->
          <div>
            <label class="block font-medium mb-2">Pilih Jenis Layanan</label>
            <div class="grid grid-cols-3 gap-3">
              <button
                v-for="option in ['Kiloan', 'Boneka', 'Karpet', 'Sepatu', 'Setrika', 'Handuk']"
                :key="option"
                type="button"
                @click="layanan = option"
                :class="[
                  'p-3 rounded-lg font-medium shadow-sm transition-all',
                  layanan === option
                    ? 'bg-pink-400 text-white'
                    : 'bg-gray-100 hover:bg-gray-200 text-gray-700'
                ]"
              >
                {{ option }}
              </button>
            </div>
          </div>

          <!-- Barang -->
          <div>
            <label class="block font-medium mb-1">Jenis Barang</label>
            <input
              v-model="barang"
              type="text"
              placeholder="Contoh: Sprei, Jaket, Bantal"
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-pink-400 outline-none"
              required
            />
          </div>

          <!-- Alamat -->
          <div>
            <label class="block font-medium mb-1">Alamat</label>
            <textarea
              v-model="alamat"
              rows="2"
              placeholder="Masukkan alamat lengkap Anda"
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-pink-400 outline-none resize-none"
              required
            ></textarea>
          </div>

          <!-- Pembayaran -->
          <div>
            <label class="block font-medium mb-2">Metode Pembayaran</label>
            <div class="grid grid-cols-3 gap-3">
              <button
                v-for="option in ['QRIS', 'Transfer', 'Cash']"
                :key="option"
                type="button"
                @click="pembayaran = option"
                :class="[
                  'p-3 rounded-lg font-medium shadow-sm transition-all',
                  pembayaran === option
                    ? 'bg-blue-400 text-white'
                    : 'bg-gray-100 hover:bg-gray-200 text-gray-700'
                ]"
              >
                {{ option }}
              </button>
            </div>
          </div>

          <!-- Tanggal -->
          <div>
            <label class="block font-medium mb-1">Tanggal Pengambilan</label>
            <input
              v-model="tanggal"
              type="date"
              class="w-full p-3 rounded-md border border-gray-300 shadow-sm focus:ring-2 focus:ring-pink-400 outline-none"
              required
            />
          </div>

          <!-- Tombol Submit -->
          <div class="flex justify-center mt-8">
            <button
              type="submit"
              class="bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-200 text-white font-semibold px-10 py-3 rounded-md shadow-md transition-all transform hover:scale-[1.03]"
            >
              Selesai Pesanan
            </button>
          </div>
        </form>

        <!-- Ringkasan Pesanan -->
        <div
          v-if="nama || layanan"
          class="bg-gray-50 p-5 rounded-lg mt-10 shadow-inner border border-gray-200"
        >
          <h3 class="font-semibold mb-2 text-gray-800">Ringkasan Pesanan:</h3>
          <ul class="space-y-1 text-gray-700 text-sm">
            <li><strong>Nama:</strong> {{ nama }}</li>
            <li><strong>WhatsApp:</strong> {{ whatsapp }}</li>
            <li><strong>Layanan:</strong> {{ layanan }}</li>
            <li><strong>Barang:</strong> {{ barang }}</li>
            <li><strong>Alamat:</strong> {{ alamat }}</li>
            <li><strong>Pembayaran:</strong> {{ pembayaran }}</li>
            <li><strong>Tanggal:</strong> {{ tanggal }}</li>
          </ul>
        </div>
      </div>
    </main>

    <Footer />
  </div>
</template>

<style scoped>
main {
  font-family: "Poppins", sans-serif;
}
</style>
