<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // Tampilkan daftar materi untuk kelas yang sudah dibeli
    public function show(Course $course)
    {
        // Pastikan user sudah membeli kursus tersebut
        $transaction = $course->transactions()->where('user_id', auth()->id())->where('payment_status', 'success')->first();

        if (!$transaction) {
            return redirect()->route('dashboard')->with('error', 'Anda belum membeli kelas ini.');
        }

        // Ambil materi kelas yang terkait dengan kursus
        $materials = $course->materials;

        // Tampilkan view dengan data materi
        return view('materials.index', compact('course', 'materials'));
    }

    // Tampilkan materi PDF
    public function viewPdf(Material $material)
    {
        // Pastikan file materi ada
        if (file_exists(storage_path('app/' . $material->file_path))) {
            return response()->file(storage_path('app/' . $material->file_path));
        }

        return redirect()->back()->with('error', 'File materi tidak ditemukan.');
    }
}
