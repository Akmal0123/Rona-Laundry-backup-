<script setup>
import Navbar from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'

// 🔹 Data dummy bertema laundry
const orders = ref([
  { id: 1, tanggal: '2025-10-20', barang: 'Cuci Kering Pakaian', jumlah: 5, status: 'Selesai', harga: 'Rp 25.000' },
  { id: 2, tanggal: '2025-10-22', barang: 'Setrika Baju', jumlah: 10, status: 'Diproses', harga: 'Rp 15.000' },
  { id: 3, tanggal: '2025-10-24', barang: 'Cuci Sepatu', jumlah: 2, status: 'Dikirim', harga: 'Rp 30.000' },
  { id: 4, tanggal: '2025-10-25', barang: 'Cuci Karpet Besar', jumlah: 1, status: 'Selesai', harga: 'Rp 50.000' },
  { id: 5, tanggal: '2025-10-27', barang: 'Laundry Bed Cover', jumlah: 2, status: 'Diproses', harga: 'Rp 40.000' },
])

function goBack() {
  router.visit('/dashboard') // arahkan sesuai halaman utama kamu
}
</script>

<template>
  <div class="min-h-screen flex flex-col bg-pink-100">
    <!-- 🔹 Navbar -->
    <Navbar />

    <!-- 🔹 Konten Utama -->
    <main class="flex-grow flex flex-col items-center justify-start py-16 px-6 pt-25">
      <div class="w-full max-w-4xl bg-pink-200 p-10 rounded-xl shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Pesanan Saya</h2>

        <!-- 🔹 Tabel -->
        <div class="overflow-x-auto">
          <table class="w-full border border-gray-400 text-gray-800 text-center bg-pink-100">
            <thead class="bg-pink-300 text-gray-900">
              <tr>
                <th class="border border-gray-400 px-4 py-2">Tgl</th>
                <th class="border border-gray-400 px-4 py-2">Layanan</th>
                <th class="border border-gray-400 px-4 py-2">Jumlah</th>
                <th class="border border-gray-400 px-4 py-2">Status</th>
                <th class="border border-gray-400 px-4 py-2">Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="order in orders"
                :key="order.id"
                class="hover:bg-pink-200 transition"
              >
                <td class="border border-gray-400 px-4 py-2">{{ order.tanggal }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ order.barang }}</td>
                <td class="border border-gray-400 px-4 py-2">{{ order.jumlah }}</td>
                <td class="border border-gray-400 px-4 py-2 font-medium">
                  <span
                    :class="{
                      'text-green-600': order.status === 'Selesai',
                      'text-yellow-600': order.status === 'Diproses',
                      'text-blue-600': order.status === 'Dikirim'
                    }"
                  >
                    {{ order.status }}
                  </span>
                </td>
                <td class="border border-gray-400 px-4 py-2">{{ order.harga }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- 🔹 Bagian bawah -->
        <div class="flex justify-between items-center mt-10">
          <button
            @click="goBack"
            class="flex items-center gap-2 border border-gray-600 px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Kembali
          </button>

          <p class="text-gray-800 font-medium cursor-pointer hover:underline">Lanjut Lainnya</p>
        </div>
      </div>
    </main>

    <!-- 🔹 Footer -->
    <Footer />
  </div>
</template>

<style scoped>
table {
  border-collapse: collapse;
}

th, td {
  border: 1px solid #b0b0b0;
}

th {
  font-weight: 600;
}
</style>
