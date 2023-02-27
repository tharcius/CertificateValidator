<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\JsonResponse;

class IndexController extends CourseController
{
    /**
     * Return an array of data in JSON format with all courses.
     */
    public function __invoke(): JsonResponse
    {
        $courses = $this->repository->getAllCourses();
        return response()->json(
            [
            'data' => $courses,
            'status' => 'success',
            'message' => 'Courses retrieved successfully'
        ],
            self::HTTP_OK
        );
    }
}
