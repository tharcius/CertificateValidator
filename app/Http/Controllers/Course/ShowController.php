<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\JsonResponse;

class ShowController extends CourseController
{
    /**
     * Return a course.
     */
    public function __invoke($courseId): JsonResponse
    {
        $course = $this->repository->getCourse($courseId);

        if (!$course) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on search Course'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $course,
                'status' => 'success',
                'message' => 'Course found successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
