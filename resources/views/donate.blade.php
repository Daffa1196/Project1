@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white p-10 rounded-3xl shadow-xl w-full max-w-lg">

        <h1 class="text-3xl font-bold text-green-600 mb-6">
            Tambah Donasi
        </h1>

        <h2 class="text-xl font-semibold mb-2">
            {{ $campaign->title }}
        </h2>

        <p class="text-gray-600 mb-6">
            {{ $campaign->description }}
        </p>

        <form action="/campaign/{{ $campaign->id }}/donate"
              method="POST">

            @csrf

            <div class="mb-5">

                <label class="block mb-2 font-semibold">
                    Nominal Donasi
                </label>

                <input type="number"
                       name="nominal"
                       class="w-full border rounded-xl px-4 py-3"
                       placeholder="Masukkan nominal donasi">

            </div>

            <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-xl shadow">

                💚 Tambahkan Donasi

            </button>

        </form>

    </div>

</div>

@endsection