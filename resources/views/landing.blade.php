<!-- resources/views/landing.blade.php -->
<x-guest-layout>
    <div class="container mx-auto px-4 md:px-8">
        <h1 class="text-4xl font-bold text-center mt-12">Glow Math Course</h1>

        @if (auth()->check())
            <p class="text-center mt-4">Selamat Datang, {{ auth()->user()->name }}!</p>
            <!-- Jika login, tampilkan nama user -->
        @else
            <p class="text-center mt-4">Selamat Datang </p> <!-- Jika belum login, tampilkan pesan untuk guest -->
        @endif

        <div class="flex justify-center items-center mt-8 space-x-4">
            <a href="{{ route('login') }}"
                class="bg-blue-500 text-white font-semibold py-3 px-8 rounded-md hover:bg-blue-600 transition duration-200">Login</a>
            <a href="{{ route('register') }}"
                class="bg-green-500 text-white font-semibold py-3 px-8 rounded-md hover:bg-green-600 transition duration-200">Register</a>

        </div>

        <div class="flex justify-center items-center mt-16">
            <p class="text-center text-lg max-w-3xl mx-auto">Join our Glow Math courses and start learning mathematics
                with personalized tutoring from experienced instructors.  Get started today!</p>
        </div>
    </div>
</x-guest-layout>
