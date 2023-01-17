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
        $this->middleware(['premiumUser'])->only('show');
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
            'estimated_finish' => $request->estimated_finish,
            'description' => $request->description,
        ]);
        return redirect()->route('courses.manage');
    }

    public function show(Course $course)
    {
        $total_completed = 0;
        $user_id = auth()->user()->id;
        foreach($course->lessons as $lesson){
            if($lesson->lessonStatus->contains('user_id', $user_id)){
                $total_completed += 1;
            }
        }
        return view('courses.show', [
            'course' => $course,
            'total_completed' => $total_completed,
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
            'estimated_finish' => $request->estimated_finish,
            'photo' => $proofNameToStore,
        ]);
        return redirect()->route('courses.manage');
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
            'estimated_finish' => 'required|integer|min:1',
            'photo' => 'image|mimes:jpeg,jpg,png,webp',
        ]);
    }
}
