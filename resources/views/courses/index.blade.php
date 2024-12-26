<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-xl font-bold">Kelas yang Tersedia</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach($courses as $course)
                <div class="card shadow-lg rounded-lg">
                    <img src="{{ asset('storage/'.$course->image) }}" alt="Course Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3>{{ $course->name }}</h3>
                        <p class="text-sm">{{ $course->description }}</p>
                        <a href="{{ route('courses.show', $course) }}" class="btn btn-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
