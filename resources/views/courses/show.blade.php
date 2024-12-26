<x-app-layout>
    <div class="container mx-auto mt-10">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="relative">
                <img src="{{ asset('storage/'.$course->image) }}" alt="Course Image" class="w-full h-64 object-cover">
                <div class="absolute top-0 left-0 bg-black bg-opacity-50 text-white p-4 rounded-br-lg">
                    <h1 class="text-2xl font-bold">{{ $course->name }}</h1>
                </div>
            </div>
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-700">Deskripsi Kelas</h2>
                <p class="mt-2 text-gray-600">{{ $course->description }}</p>

                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-gray-700">Jadwal Tersedia</h3>
                    <p class="mt-1 text-gray-600 font-medium">
                        Hari: <span class="font-semibold">{{ $course->schedule_day }}</span> <br>
                        Waktu: <span class="font-semibold">{{ $course->schedule_time }}</span>
                    </p>
                </div>

                <div class="mt-6">
                    <h3 class="text-lg font-semibold text-gray-700">Harga</h3>
                    <p class="mt-2 text-green-600 font-bold text-2xl">Rp {{ number_format($course->price, 0, ',', '.') }}</p>
                </div>

                <form action="{{ route('transactions.checkout', $course) }}" method="POST" class="mt-8">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="schedule_day" class="block text-sm font-medium text-gray-700">Pilih Hari</label>
                            <select name="schedule_day" id="schedule_day" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                            </select>
                        </div>
                        <div>
                            <label for="schedule_time" class="block text-sm font-medium text-gray-700">Pilih Waktu</label>
                            <select name="schedule_time" id="schedule_time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                <option value="14:00">14:00</option>
                                <option value="16:00">16:00</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-6 rounded-lg mt-6 hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300 font-semibold">
                        Beli Kelas
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
