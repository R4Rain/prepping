<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonStatus;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Course $course)
    {
        return view('lessons.create', [
            'course' => $course,
        ]);
    }

    public function store(Request $request, Course $course)
    {
        $this->validateRequest($request);

        Lesson::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'course_id' => $course->id,
        ]);

        return redirect()->route('courses.show', $course);
    }

    public function show(Course $course, Lesson $lesson)
    {
        if(auth()->user()->role != 'ADMIN'){
            $user_id = auth()->user()->id;
            $existing_status = LessonStatus::where('user_id', $user_id)->where('lesson_id', $lesson->id);
            if(!$existing_status->exists()){
                LessonStatus::create([
                    'user_id' => $user_id,
                    'lesson_id' => $lesson->id,
                ]);
            }
        }
        $next_exists = ($course->lessons()->where('id', '>', $lesson->id)->count() > 0);
        $prev_exists = ($course->lessons()->where('id', '<', $lesson->id)->count() > 0);
        return view('lessons.show', [
            'course' => $course,
            'lesson' => $lesson,
            'next_exists' => $next_exists,
            'prev_exists' => $prev_exists,
        ]);
    }

    public function next(Course $course, Lesson $lesson)
    {
        $next = $course->lessons()->where('id', '>', $lesson->id)->orderBy('id', 'asc')->first();
        $next = $next ? $next : $lesson;
        return redirect()->route('learn.lessons.show', [$course, $next]);
    }

    public function previous(Course $course, Lesson $lesson)
    {
        $prev = $course->lessons()->where('id', '<', $lesson->id)->orderBy('id', 'desc')->first();
        $prev = $prev ? $prev : $lesson;
        return redirect()->route('learn.lessons.show', [$course, $prev]);
    }

    public function edit(Course $course, Lesson $lesson)
    {
        return view('lessons.edit', [
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    public function update(Request $request, Lesson $lesson)
    {   
        $this->validateRequest($request);
        
        $lesson->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
        ]);
        
        return redirect()->route('courses.edit', $lesson->course);
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('courses.show', $course);
    }

    public function validateRequest(Request $request)
    {   
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string'
        ]);
    }
}
