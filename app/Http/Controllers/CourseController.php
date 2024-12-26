<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
    ]);

    // Simpan file ke storage/app/public/courses
    $imagePath = $request->file('image')->store('courses', 'public');

    // Simpan data ke database
    Course::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'image' => $imagePath, // Simpan path gambar
    ]);

    return redirect()->route('courses.index')->with('success', 'Course created successfully.');
}
}
