<x-app-layout>
    <div class="container mx-auto py-6">
        <h2 class="text-2xl font-bold">Dashboard</h2>
        
        <div class="mt-6">
            <h3 class="text-xl font-semibold">Kursus yang Sudah Dibeli</h3>
            
            @if($transactions->isEmpty())
                <p class="mt-4 text-gray-500">Anda belum membeli kursus apapun.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    @foreach($transactions as $transaction)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src="{{ asset('storage/' . $transaction->course->image) }}" alt="{{ $transaction->course->name }}" class="h-32 w-full object-cover rounded-lg mb-4">
                            <h4 class="text-lg font-semibold">{{ $transaction->course->name }}</h4>
                            <p class="text-sm text-gray-500">{{ $transaction->course->description }}</p>
                            <p class="mt-2 text-sm font-semibold text-green-600">Status: Sukses</p>
                            <a href="{{ route('materials.show', $transaction->course->id) }}" class="inline-block mt-4 px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded">Lihat Materi</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
