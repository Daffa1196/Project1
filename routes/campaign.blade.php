@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-10">

    <div class="flex justify-between items-center mb-6">
        
        <div>
            <h1 class="text-5xl font-bold text-green-600">
                Donasiku Campaign
            </h1>

            <p class="text-gray-600 mt-2">
                Kelola data campaign donasi dengan mudah.
            </p>
        </div>

        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow">
            + Tambah Campaign
        </button>

    </div>

    <div class="bg-white rounded-3xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="px-4 py-4">No</th>
                    <th class="px-4 py-4">Title</th>
                    <th class="px-4 py-4">Description</th>
                    <th class="px-4 py-4">Target</th>
                    <th class="px-4 py-4">Collected</th>
                    <th class="px-4 py-4">Deadline</th>
                    <th class="px-4 py-4">Action</th>
                </tr>
            </thead>

          <tbody class="text-center">

    <tr class="border-b">
        <td class="py-4">1</td>
        <td>Bantu Korban Banjir</td>
        <td>Donasi untuk korban banjir di Kalimantan.</td>
        <td>Rp 10.000.000</td>
        <td>Rp 4.500.000</td>
        <td>30 Mei 2026</td>

        <td>
            <button class="bg-blue-500 text-white px-3 py-1 rounded">
                Edit
            </button>

            <button class="bg-red-500 text-white px-3 py-1 rounded">
                Hapus
            </button>
        </td>
    </tr>

    <tr class="border-b">
        <td class="py-4">2</td>
        <td>Peduli Pendidikan</td>
        <td>Bantuan perlengkapan sekolah anak yatim.</td>
        <td>Rp 15.000.000</td>
        <td>Rp 7.000.000</td>
        <td>10 Juni 2026</td>

        <td>
            <button class="bg-blue-500 text-white px-3 py-1 rounded">
                Edit
            </button>

            <button class="bg-red-500 text-white px-3 py-1 rounded">
                Hapus
            </button>
        </td>
    </tr>

</tbody>
@endsection