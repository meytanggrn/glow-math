<x-app-layout>
    <div class="container mx-auto py-6">
        <h2 class="text-2xl font-bold">Materi Kelas: {{ $course->name }}</h2>
        
        @if($materials->isEmpty())
            <p class="mt-4 text-gray-500">Tidak ada materi yang tersedia untuk kelas ini.</p>
        @else
            <div class="mt-6">
                <ul>
                    @foreach($materials as $material)
                        <li class="border-b py-2">
                            <a href="{{ route('materials.view', $material->id) }}" class="text-blue-500 hover:text-blue-700">
                                {{ $material->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-app-layout>
