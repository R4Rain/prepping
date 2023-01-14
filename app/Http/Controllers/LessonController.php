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

        return redirect()->route('learn.show', $course);
    }

    public function show(Course $course, Lesson $lesson)
    {
        // if(auth()->check() && auth()->user()->role != 'ADMIN'){
        //     $user_id = auth()->user()->id;
        //     $existing_status = LessonStatus::where('user_id', $user_id)->where('course_id', $course->id)->where('lesson_id', $lesson->id);
        //     if(!$existing_status->exists()){
        //         LessonStatus::create([
        //             'user_id' => $user_id,
        //             'course_id' => $course->id,
        //             'lesson_id' => $lesson->id,
        //         ]);
        //     }
        // }
        
        return view('lessons.show', [
            'course' => $course,
            'lesson' => $lesson
        ]);
    }

    public function edit(Course $course, Lesson $lesson)
    {
        return view('lessons.edit', [
            'course' => $course,
            'lesson' => $lesson,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $this->validateRequest($request);

        $lesson->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
        ]);

        return redirect()->route('learn.show', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('learn.show', $course);
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
