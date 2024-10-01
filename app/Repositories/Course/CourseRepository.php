<?php

namespace App\Repositories\Course;

use App\Models\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function index()
    {
        $courses = Course::all();
        return $courses;
    }
}