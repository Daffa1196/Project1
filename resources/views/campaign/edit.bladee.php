@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">

    <h1 class="text-3xl font-bold text-blue-600 mb-6">
        Edit Campaign
    </h1>

    <form action="/campaign/{{ $campaign->id }}" method="POST">

        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Title
            </label>

            <input
                type="text"
                name="title"
                value="{{ $campaign->title }}"
                class="w-full border rounded-lg px-4 py-2"
            >
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea
                name="description"
                class="w-full border rounded-lg px-4 py-2"
            >{{ $campaign->description }}</textarea>
        </div>

        <!-- Target Donation -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Target Donation
            </label>

            <input
                type="number"
                name="target_donation"
                value="{{ $campaign->target_donation }}"
                class="w-full border rounded-lg px-4 py-2"
            >
        </div>

        <!-- Collected Donation -->
        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Collected Donation
            </label>

            <input
                type="number"
                name="collected_donation"
                value="{{ $campaign->collected_donation }}"
                class="w-full border rounded-lg px-4 py-2"
            >
        </div>

        <!-- Deadline -->
        <div class="mb-6">
            <label class="block mb-2 font-semibold">
                Deadline
            </label>

            <input
                type="date"
                name="deadline"
                value="{{ $campaign->deadline }}"
                class="w-full border rounded-lg px-4 py-2"
            >
        </div>

        <!-- Button -->
        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700"
        >
            Update
        </button>

    </form>

</div>

@endsection