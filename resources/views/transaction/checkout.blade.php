<x-app-layout>
    <div class="container mx-auto py-6">
        <h2 class="text-2xl font-bold">Pilih Jadwal untuk Kelas: {{ $course->name }}</h2>
        
        <form action="{{ route('transaction.process', $course) }}" method="POST">
            @csrf
            <div class="mt-4">
                <label for="schedule" class="block">Pilih Jadwal</label>
                <select name="schedule" id="schedule" class="mt-2 p-2 border rounded-md">
                    <option value="">Pilih Jadwal</option>
                    @foreach($course->schedules as $schedule)
                        <option value="{{ $schedule->id }}" 
                            @if($schedule->participants_count >= $schedule->capacity) disabled @endif>
                            {{ $schedule->day }} - {{ $schedule->time }}
                            @if($schedule->participants_count >= $schedule->capacity) (Penuh) @endif
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="mt-4 btn btn-primary">Beli Kelas</button>
        </form>
    </div>
</x-app-layout>
