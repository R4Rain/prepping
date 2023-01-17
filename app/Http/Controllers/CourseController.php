<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
        $this->middleware(['admin'])->except('index', 'show');
    }

    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()->take(5),
        ]);
    }

    public function manage()
    {
        return view('courses.manage', [
            'courses' => Course::all(),
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        if($request->has('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->title . '.' . $extension;
            $request->file('photo')->storeAs('public/courses', $proofNameToStore);
        }
        Course::create([
            'title' => $request->title,
            'photo' => $proofNameToStore,
            'description' => $request->description,
        ]);
        return redirect()->route('courses.manage');
    }

    public function show(Course $course)
    {
        return view('courses.show', [
            'course' => $course,
        ]);
    }

    public function edit(Course $course)
    {
        return view('courses.edit', [
            'course' => $course,
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $this->validateRequest($request);
        if ($request->hasFile('photo')) {
            if ($course->photo != NULL)
                Storage::delete('public/courses/' . $course->photo);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('title') . '.' . $extension;
            $request->file('photo')->storeAs('public/courses/', $proofNameToStore);
        } else {
            $proofNameToStore = $course->photo;
        }
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $proofNameToStore,
        ]);
        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course)
    {
        if($course->photo != NULL){
            Storage::delete('public/courses/' . $course->photo);
        }
        $course->delete();
        
        return redirect()->route('courses.index');
    }

    public function validateRequest(Request $request)
    {   
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'photo' => 'image|mimes:jpeg,jpg,png,webp'
        ]);
    }
}
