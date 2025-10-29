<template>
  <footer class="bg-pink-200 text-gray-900 py-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-3 gap-8">
      
      <div>
        <h2 class="text-xl font-semibold mb-3">RonaLaundry</h2>
      </div>

      
      <div>
        <h3 class="text-lg font-semibold mb-3">Menu</h3>
        <ul class="space-y-2">
          <li><a href="/" class="hover:underline">Beranda</a></li>
          <li><a href="#" class="hover:underline">Cek Status</a></li>
          <li><a href="#" class="hover:underline">Reservasi</a></li>
        </ul>
      </div>

      
      <div>
        <h3 class="text-lg font-semibold mb-3">Kontak</h3>
        <ul class="space-y-2">
          <li>087844590030</li>
          <li>rona_laundry</li>
          <li>
            Jl. Kapulago Barat II No.3<br />
            RT.01 RW.10 Pajang, Laweyan,<br />
            Surakarta
          </li>
        </ul>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style scoped>
footer {
  border-top: 1px solid #e5e7eb;
}
</style>