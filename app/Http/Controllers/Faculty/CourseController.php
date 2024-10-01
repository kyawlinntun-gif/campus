<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\Http\Request;

class CourseController extends BaseController
{
    private CourseRepositoryInterface $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function index()
    {
        $courses = $this->courseRepository->index();
        $courses = CourseResource::collection($courses);
        return $this->sendResponse($courses, 'Courses Retrived Successfully!');
    }
}
