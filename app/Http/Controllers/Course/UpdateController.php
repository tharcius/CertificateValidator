<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\UpdateRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\JsonResponse;

class UpdateController extends Controller
{
    /**
     * Update the register
     */
    public function __invoke(UpdateRequest $data, Course $course): JsonResponse
    {
        try {
            $course->update($data->only('name', 'duration', 'description'));

            return response()->json([
                'data' => new CourseResource($course),
                'status' => 'success',
                'message' => 'Course updated successfully'
            ], self::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on update Course'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
