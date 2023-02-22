<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    /**
     * Return an array of data in JSON format with all courses
     */
    public function __invoke(): JsonResponse
    {
        $courses = Course::all();
        return response()->json([
            'data' => $courses,
            'status' => 'success',
            'message' => 'Courses retrieved successfully'
        ], 200);
    }
}
