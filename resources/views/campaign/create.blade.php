@extends('layouts.app')

@section('content')
{{-- Beri padding py-10 agar form tidak menempel langsung ke navbar --}}
<div class="w-full py-10 px-4">

    <form action="{{ route('campaign.store') }}" method="POST" class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-2xl space-y-6">
        @csrf

        {{-- 1. INFORMASI KAMPANYE --}}
        <div class="space-y-4">
            <h2 class="text-xl font-bold border-b-2 border-green-500 pb-2 text-gray-800">Informasi Kampanye</h2>
            
            <input type="text" name="title" placeholder="Judul Kampanye" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
            
            <textarea name="description" placeholder="Deskripsi Lengkap" class="border p-2 w-full rounded h-32 focus:ring-2 focus:ring-green-400 outline-none" required></textarea>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-xs font-semibold text-gray-600 block mb-1">Target Dana (Rp)</label>
                    <input type="number" name="target_donation" placeholder="Contoh: 10000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                </div>
                <div>
                    <label class="text-xs font-semibold text-gray-600 block mb-1">Dana Terkumpul (Rp)</label>
                    <input type="number" name="collected_donation" placeholder="Contoh: 0" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                </div>
                <div class="col-span-2">
                    <label class="text-xs font-semibold text-gray-600 block mb-1">Batas Waktu</label>
                    <input type="date" name="deadline" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                </div>
            </div>
        </div>

        {{-- 2. REKENING PENCAIRAN --}}
        <div class="space-y-3 bg-gray-50 p-4 rounded-xl border border-gray-100">
            <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider">Info Rekening Pencairan (1:1)</h2>
            <input type="text" name="bank_name" placeholder="Nama Bank (Misal: BRI, BSI, BCA)" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="account_number" placeholder="Nomor Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
                <input type="text" name="account_holder" placeholder="Nama Pemilik Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
            </div>
        </div>

        {{-- 3. PILIH KATEGORI --}}
        <div class="space-y-2">
            <h2 class="text-sm font-bold text-emerald-600 uppercase tracking-wider">Pilih Kategori (M:M)</h2>
            <div class="flex flex-wrap gap-4">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="categories[]" value="1" class="rounded text-green-500 focus:ring-green-400">
                    <span class="ml-2 text-sm text-gray-700">Kesehatan</span>
                </label>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="categories[]" value="2" class="rounded text-green-500 focus:ring-green-400">
                    <span class="ml-2 text-sm text-gray-700">Bencana Alam</span>
                </label>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="categories[]" value="3" class="rounded text-green-500 focus:ring-green-400">
                    <span class="ml-2 text-sm text-gray-700">Pendidikan</span>
                </label>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="categories[]" value="4" class="rounded text-green-500 focus:ring-green-400">
                    <span class="ml-2 text-sm text-gray-700">Panti Asuhan</span>
                </label>
            </div>
            <p class="text-xs text-gray-400 italic">*Anda bisa memilih lebih dari satu kategori</p>
        </div>

        {{-- 4. BUTTON AKSI --}}
        <div class="flex gap-3 pt-4 border-t">
            <a href="{{ route('campaign.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-3 rounded-xl transition duration-150 text-center">
                ❌ Batal
            </a>
            <button type="submit" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-xl shadow transition duration-150 text-center">
                🚀 Publikasikan Kampanye Sosial
            </button>
        </div>

    </form>

</div>
@endsection