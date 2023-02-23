<?php

namespace App\Http\Controllers\Course;

use App\Http\Requests\Courses\UpdateRequest;
use App\Http\Resources\CourseResource;
use Illuminate\Http\JsonResponse;

class UpdateController extends CourseController
{
    /**
     * Update a course.
     */
    public function __invoke(UpdateRequest $data, int $courseId): JsonResponse
    {
        $course = $this->repository->updateCourse($data->only('name', 'duration', 'description'), $courseId);

        if (!$course) {
            return response()->json(
                [
                'status' => 'error',
                'message' => 'Fail on update Course'
            ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
            'data' => new CourseResource($course),
            'status' => 'success',
            'message' => 'Course updated successfully'
        ],
            self::HTTP_OK
        );
    }
}
