
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasiku</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-green-50 to-white min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md px-10 py-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-green-600">
            Donasiku
        </h1>

        <div class="space-x-4">
            <a href="/campaign"
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg transition">
               Lihat Campaign
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex-1 flex items-center justify-center px-6">

        <div class="max-w-5xl w-full grid md:grid-cols-2 gap-10 items-center">

            <!-- Text -->
            <div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-green-600 leading-tight mb-6">
                    Selamat Datang di Donasiku
                </h1>

                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Platform donasi modern untuk membantu sesama dengan cepat,
                    aman, dan transparan.
                    Mari bersama menciptakan perubahan kecil yang berarti besar.
                </p>

                <div class="flex gap-4">
                    <a href="/campaign"
                       class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow-lg transition">
                        Mulai Donasi
                    </a>

                    <a href="/campaign/create"
                       class="border border-green-600 text-green-600 hover:bg-green-50 px-6 py-3 rounded-xl transition">
                        Buat Campaign
                    </a>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">

                <div class="space-y-6">

                    <div class="bg-green-100 p-5 rounded-2xl">
                        <h2 class="text-xl font-bold text-green-700 mb-2">
                            Donasi Transparan
                        </h2>
                        <p class="text-gray-600">
                            Semua donasi tercatat dengan jelas dan mudah dipantau.
                        </p>
                    </div>

                    <div class="bg-blue-100 p-5 rounded-2xl">
                        <h2 class="text-xl font-bold text-blue-700 mb-2">
                            Mudah Digunakan
                        </h2>
                        <p class="text-gray-600">
                            Interface sederhana dan nyaman untuk semua pengguna.
                        </p>
                    </div>

                    <div class="bg-yellow-100 p-5 rounded-2xl">
                        <h2 class="text-xl font-bold text-yellow-700 mb-2">
                            Cepat & Aman
                        </h2>
                        <p class="text-gray-600">
                            Sistem donasi modern dengan proses yang cepat dan aman.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-white border-t mt-20 py-6 text-center text-gray-500">
        © 2026 Donasiku — Berbagi Kebaikan Untuk Sesama
    </footer>

</body>
</html>
```

