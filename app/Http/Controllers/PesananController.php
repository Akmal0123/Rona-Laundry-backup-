<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    // 🔹 CREATE (menyimpan pesanan baru)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_masuk' => 'required|date',
            'metode_pengambilan' => 'required|string|max:50',
            'total_harga' => 'required|numeric|min:0',
        ]);

        $pesanan = Pesanan::create([
            'id_user' => Auth::id(),
            'tanggal_masuk' => $validated['tanggal_masuk'],
            'metode_pengambilan' => $validated['metode_pengambilan'],
            'status_order' => 'Menunggu konfirmasi',
            'total_harga' => $validated['total_harga'],
        ]);

        return response()->json([
            'message' => 'Pesanan berhasil dibuat.',
            'data' => $pesanan
        ], 201);
    }

    // 🔹 READ (tampilkan semua pesanan milik user login)
    public function index()
    {
        $pesanan = Pesanan::where('id_user', Auth::id())
            ->with('detailPesanan')
            ->orderByDesc('created_at')
            ->get();

        return response()->json([
            'message' => 'Daftar pesanan user login.',
            'data' => $pesanan
        ]);
    }

    // 🔹 READ DETAIL (tampilkan satu pesanan)
    public function show($id)
    {
        $pesanan = Pesanan::where('id_user', Auth::id())
            ->with('detailPesanan')
            ->findOrFail($id);

        return response()->json([
            'message' => 'Detail pesanan.',
            'data' => $pesanan
        ]);
    }

    // 🔹 UPDATE (ubah data pesanan)
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::where('id_user', Auth::id())->findOrFail($id);

        $validated = $request->validate([
            'tanggal_selesai' => 'nullable|date',
            'metode_pengambilan' => 'nullable|string|max:50',
            'status_order' => 'nullable|string|max:50',
            'total_harga' => 'nullable|numeric|min:0',
        ]);

        $pesanan->update($validated);

        return response()->json([
            'message' => 'Pesanan berhasil diperbarui.',
            'data' => $pesanan
        ]);
    }

    // 🔹 DELETE (hapus pesanan)
    public function destroy($id)
    {
        $pesanan = Pesanan::where('id_user', Auth::id())->findOrFail($id);
        $pesanan->delete();

        return response()->json([
            'message' => 'Pesanan berhasil dihapus (soft delete).'
        ]);
    }
}