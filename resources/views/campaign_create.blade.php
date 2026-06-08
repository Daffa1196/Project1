@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 py-10">

    <div class="max-w-3xl mx-auto">

        <div class="bg-white p-10 rounded-3xl shadow-xl">

            {{-- TITLE --}}
            <h1 class="text-4xl font-extrabold text-green-600 mb-2">
                Tambah Campaign
            </h1>

            <p class="text-gray-500 mb-8">
                Tambahkan campaign donasi baru
            </p>

            {{-- FORM --}}
            <form action="/campaign" method="POST">

                @csrf

                {{-- TITLE --}}
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Title
                    </label>

                    <input 
                        type="text"
                        name="title"
                        placeholder="Masukkan judul campaign"
                        class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                </div>

                {{-- DESCRIPTION --}}
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Description
                    </label>

                    <textarea
                        name="description"
                        rows="5"
                        placeholder="Masukkan deskripsi campaign"
                        class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    ></textarea>

                </div>

                {{-- TARGET DONATION --}}
                <div class="mb-5">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Target Donation
                    </label>

                    <input 
                        type="number"
                        name="target_donation"
                        placeholder="Masukkan target donasi"
                        class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                </div>

                {{-- DEADLINE --}}
                <div class="mb-8">

                    <label class="block mb-2 font-semibold text-gray-700">
                        Deadline
                    </label>

                    <input 
                        type="date"
                        name="deadline"
                        class="w-full border border-gray-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >

                </div>

                {{-- BUTTON --}}
                <div class="flex gap-3">

                    <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-2xl shadow-lg transition duration-300">

                        💾 Simpan Campaign

                    </button>

                    <a href="/campaign"
                       class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-8 py-3 rounded-2xl">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection