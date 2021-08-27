<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {

        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        $courses = Course::all();


        return view('teacher.courses.index', compact('courses'));
    }

    public function create()
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        return view('teacher.courses.create');
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());

        return redirect()->route('teacher.courses.index');
    }

    public function show(Course $course)
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        return view('teacher.courses.edit', compact('course'));
    }

    public function edit(Course $course)
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }

        return view('teacher.courses.edit', compact('course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return redirect()->route('teacher.courses.index');
    }

    public function destroy(Course $course)
    {
        if (Gate::denies('manage-courses')) {
            abort(403);
        }
        $course->delete();

        return redirect()->route('teacher.courses.index');
    }
}

