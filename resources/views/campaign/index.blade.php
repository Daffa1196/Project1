@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100" x-data="{ openModal: false }">

    {{-- HERO --}}
    <div class="bg-green-500 py-16 text-center text-white">
        <h1 class="text-5xl font-bold mb-2">Daftar Campaign</h1>
        <p class="text-lg text-green-100">Kelola campaign donasi dengan mudah</p>
    </div>

    <div class="max-w-6xl mx-auto py-10 px-6">

        {{-- HEADER & BUTTON TAMBAH --}}
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-gray-800">Semua Campaign</h2>
    
    <a href="{{ route('campaign.create') }}"
       class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl shadow transition duration-200 inline-block">
        + Tambah Campaign
    </a>
</div>

        {{-- TABLE CARD --}}
        <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-green-50">
                    <tr class="text-left text-gray-700">
                        <th class="px-6 py-4 w-16">No</th>
                        <th class="px-6 py-4">Judul</th>
                        <th class="px-6 py-4">Deskripsi</th>
                        <th class="px-6 py-4">Target</th>
                        <th class="px-6 py-4">Terkumpul</th>
                        <th class="px-6 py-4">Deadline</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($campaigns as $campaign)
                    <tr class="border-b hover:bg-gray-50 transition duration-150">
                        <td class="px-6 py-5">{{ $loop->iteration }}</td>
                        <td class="px-6 py-5 font-semibold text-gray-900">{{ $campaign->title }}</td>
                        <td class="px-6 py-5 text-gray-600 text-sm max-w-xs truncate">{{ $campaign->description }}</td>
                        <td class="px-6 py-5 whitespace-nowrap text-gray-800">Rp {{ number_format($campaign->target_donation, 0, ',', '.') }}</td>
                        <td class="px-6 py-5 whitespace-nowrap text-green-600 font-bold">Rp {{ number_format($campaign->collected_donation, 0, ',', '.') }}</td>
                        <td class="px-6 py-5 whitespace-nowrap text-gray-600">{{ \Carbon\Carbon::parse($campaign->deadline)->format('d M Y') }}</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('campaign.edit', $campaign->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-150">✏ Edit</a>
                                <form action="{{ route('campaign.destroy', $campaign->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-150">🗑 Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-10 text-center text-gray-400 italic">Belum ada data campaign.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- INTERFACE MODAL POPUP (FORM DARI GAMBAR KAMU SEBELUMNYA) --}}
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 overflow-y-auto p-4" 
         x-show="openModal" 
         x-transition
         style="display: none;">
        
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-8 shadow-2xl relative space-y-6">
            
            <button @click="openModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl font-bold">&times;</button>
            
            <form action="{{ route('campaign.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <h2 class="text-xl font-bold border-b-2 border-green-500 pb-2">Informasi Kampanye</h2>
                    <input type="text" name="title" placeholder="Judul Kampanye" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                    <textarea name="description" placeholder="Deskripsi Lengkap" class="border p-2 w-full rounded h-24 focus:ring-2 focus:ring-green-400 outline-none" required></textarea>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm text-gray-600">Target Dana (Rp)</label>
                            <input type="number" name="target_donation" placeholder="Contoh: 10000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                        </div>
                        <div>
                            <label class="text-sm text-gray-600">Dana Terkumpul (Rp)</label>
                            <input type="number" name="collected_donation" placeholder="Contoh: 10000000" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                        </div>
                        <div class="col-span-2">
                            <label class="text-sm text-gray-600">Batas Waktu</label>
                            <input type="date" name="deadline" class="border p-2 w-full rounded focus:ring-2 focus:ring-green-400 outline-none" required>
                        </div>
                    </div>
                </div>

                <div class="space-y-2 bg-gray-50 p-4 rounded-lg">
                    <h2 class="text-sm font-bold text-blue-600 uppercase tracking-wider">Info Rekening Pencairan (1:1)</h2>
                    <input type="text" name="bank_name" placeholder="Nama Bank (Misal: BRI, BSI, BCA)" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="account_number" placeholder="Nomor Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
                        <input type="text" name="account_holder" placeholder="Nama Pemilik Rekening" class="border p-2 w-full rounded focus:ring-2 focus:ring-blue-400 outline-none" required>
                    </div>
                </div>

                <div class="space-y-2">
                    <h2 class="text-sm font-bold text-emerald-600 uppercase tracking-wider">Pilih Kategori (M:M)</h2>
                    <div class="flex flex-wrap gap-3">
                        <label class="inline-flex items-center"><input type="checkbox" name="categories[]" value="1" class="text-green-500"><span class="ml-2 text-sm text-gray-700">Kesehatan</span></label>
                        <label class="inline-flex items-center"><input type="checkbox" name="categories[]" value="2" class="text-green-500"><span class="ml-2 text-sm text-gray-700">Bencana Alam</span></label>
                        <label class="inline-flex items-center"><input type="checkbox" name="categories[]" value="3" class="text-green-500"><span class="ml-2 text-sm text-gray-700">Pendidikan</span></label>
                        <label class="inline-flex items-center"><input type="checkbox" name="categories[]" value="4" class="text-green-500"><span class="ml-2 text-sm text-gray-700">Panti Asuhan</span></label>
                    </div>
                </div>

                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-lg w-full transition duration-200">
                    🚀 Publikasikan Kampanye Sosial
                </button>
            </form>
        </div>
    </div>

</div>
@endsection