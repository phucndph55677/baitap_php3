<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.detail', compact('course'));
    }
}
