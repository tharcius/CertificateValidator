<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Course $course): CourseResource|JsonResponse
    {
        return response()->json([
            'data' => new CourseResource($course),
            'status' => 'success',
            'message' => 'Course found successfully'
        ], self::HTTP_OK);
    }
}
