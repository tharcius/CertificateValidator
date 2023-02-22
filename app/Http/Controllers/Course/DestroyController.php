<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Course $course): JsonResponse
    {
        try {
            $course->deleteOrFail();

            return response()->json([
                'data' => new CourseResource($course),
                'status' => 'success',
                'message' => 'Course deleted successfully'
            ], self::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on delete Course'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
