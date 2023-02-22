<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\CreateRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke(CreateRequest $course): JsonResponse
    {
        $data = $course->only('name', 'duration', 'description');

        try {
            $result = Course::create($data);
            return response()->json([
                'data' => new CourseResource($result),
                'status' => 'success',
                'message' => 'Course created successfully'
            ], self::HTTP_CREATE_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on create Course'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
