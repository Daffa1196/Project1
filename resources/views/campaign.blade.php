@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100">

    {{-- HERO SECTION --}}
    <div class="bg-green-500 py-16 text-center text-white shadow-lg">

        <h1 class="text-5xl font-extrabold mb-3">
            Daftar Campaign
        </h1>

        <p class="text-lg text-green-100">
            Kelola campaign donasi kamu dengan mudah
        </p>

    </div>

    <div class="max-w-7xl mx-auto px-6 py-10">

        {{-- ALERT SUCCESS --}}
        @if(session('success'))

            <div class="bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-2xl mb-6">

                ✅ {{ session('success') }}

            </div>

        @endif

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-6">

            <div>

                <h2 class="text-3xl font-bold text-gray-800">
                    Semua Campaign
                </h2>

                <p class="text-gray-500 mt-1">
                    Data campaign donasi yang tersedia
                </p>

            </div>

            {{-- BUTTON --}}
            <a href="/campaign/create"
               class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-2xl shadow-lg transition duration-300">

                + Tambah Campaign

            </a>

        </div>

        {{-- TABLE --}}
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

            <table class="w-full">

                {{-- TABLE HEADER --}}
                <thead class="bg-green-50">

                    <tr class="text-gray-700 text-left">

                        <th class="px-6 py-5">No</th>
                        <th class="px-6 py-5">Title</th>
                        <th class="px-6 py-5">Description</th>
                        <th class="px-6 py-5">Target</th>
                        <th class="px-6 py-5">Collected</th>
                        <th class="px-6 py-5">Deadline</th>
                        <th class="px-6 py-5 text-center">Action</th>

                    </tr>

                </thead>

                {{-- TABLE BODY --}}
                <tbody class="text-gray-700">

                    @forelse($campaigns as $campaign)

                    <tr class="border-b hover:bg-gray-50 transition duration-200">

                        <td class="px-6 py-5">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-6 py-5 font-semibold">
                            {{ $campaign->title }}
                        </td>

                        <td class="px-6 py-5">
                            {{ $campaign->description }}
                        </td>

                        <td class="px-6 py-5">
                            Rp {{ number_format($campaign->target_donation,0,',','.') }}
                        </td>

                        <td class="px-6 py-5 text-green-600 font-bold">
                            Rp {{ number_format($campaign->collected_donation,0,',','.') }}
                        </td>

                        <td class="px-6 py-5">
                            {{ $campaign->deadline }}
                        </td>

                        <td class="px-6 py-5">

                            <div class="flex justify-center gap-2">

                                {{-- EDIT --}}
                                <a href="{{ route('campaign.edit', $campaign->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-xl shadow">

                                    ✏ Edit

                                </a>

                                {{-- DELETE --}}
                                <form action="{{ route('campaign.destroy', $campaign->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl shadow">

                                        🗑 Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-10 text-gray-500">

                            Belum ada data campaign

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection