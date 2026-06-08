<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Menampilkan halaman daftar semua campaign (Index)
     */
    public function index()
    {
        // Mengambil semua data campaign dari database
        $campaigns = Campaign::all();
        
        // Mengarahkan ke file resources/views/campaign/index.blade.php
        return view('campaign.index', compact('campaigns'));
    }

    /**
     * Menampilkan halaman form tambah campaign baru (Create)
     * Ini yang dipanggil saat tombol "+ Tambah Campaign" diklik
     */
    public function create()
    {
        // Mengarahkan ke file resources/views/campaign/create.blade.php
        return view('campaign.create');
    }

    /**
     * Memproses penyimpanan data dari form ke database (Store)
     */
    public function store(Request $request)
    {
        // 1. Validasi input form agar wajib diisi dan sesuai tipe datanya
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_donation' => 'required|numeric',
            'collected_donation' => 'required|numeric',
            'deadline' => 'required|date',
            'bank_name' => 'required|string',
            'account_number' => 'required|string',
            'account_holder' => 'required|string',
            'categories' => 'nullable|array'
        ]);

        // 2. Simpan data utama campaign ke database
        $campaign = Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'collected_donation' => $request->collected_donation,
            'deadline' => $request->deadline,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_holder' => $request->account_holder,
        ]);

        // 3. Simpan relasi Many-to-Many ke tabel pivot kategori (jika ada yang dicentang)
        if ($request->has('categories')) {
            $campaign->categories()->sync($request->categories);
        }

        // 4. Redirect kembali ke halaman index tabel dengan pesan sukses
        return redirect()->route('campaign.index')->with('success', 'Campaign baru berhasil dipublikasikan!');
    }

    /**
     * Menampilkan halaman edit (Edit)
     */
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('campaign.edit', compact('campaign'));
    }

    /**
     * Memproses update data (Update)
     */
    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->update($request->all());
        
        if ($request->has('categories')) {
            $campaign->categories()->sync($request->categories);
        }

        return redirect()->route('campaign.index')->with('success', 'Campaign berhasil diperbarui!');
    }

    /**
     * Menghapus data campaign (Destroy)
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect()->route('campaign.index')->with('success', 'Campaign berhasil dihapus!');
    }
}