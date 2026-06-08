<nav class="bg-white shadow-md py-4 sticky top-0 z-50">
    
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6">

        <h1 class="text-3xl font-bold text-green-600 tracking-wider">
            <a href="/">DONASIKU</a>
        </h1>

        <ul class="flex gap-8 text-gray-700 font-medium items-center">
            <li>
                <a href="/" class="hover:text-green-600 transition duration-150">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('campaign.index') }}" class="hover:text-green-600 transition duration-150">
                    Campaign
                </a>
            </li>

            <li>
                <a href="/profil" class="hover:text-green-600 transition duration-150">
                    Profil
                </a>
            </li>

            <li>
                <a href="/kontak" class="hover:text-green-600 transition duration-150">
                    Kontak
                </a>
            </li>
        </ul>

    </div>

</nav>