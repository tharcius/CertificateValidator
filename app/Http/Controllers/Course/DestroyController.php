<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\JsonResponse;

class DestroyController extends CourseController
{
    /**
     * Delete a course.
     */
    public function __invoke($courseId): JsonResponse
    {
        $course = $this->repository->deleteCourse($courseId);

        if (!$course) {
            return response()->json(
                [
                'status' => 'error',
                'message' => 'Fail on delete Course'
            ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
            'data' => $course,
            'status' => 'success',
            'message' => 'Course deleted successfully'
        ],
            self::HTTP_OK
        );
    }
}
