<?php

namespace App\Http\Controllers\Course;

use App\Http\Requests\Courses\CreateRequest;
use Illuminate\Http\JsonResponse;

class CreateController extends CourseController
{
    /**
     * Create a new course.
     */

    public function __invoke(CreateRequest $course): JsonResponse
    {
        $data = $course->only('name', 'duration', 'description');

        $result = $this->repository->createCourse($data);
        if (!$result) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on create Course'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $result,
                'status' => 'success',
                'message' => 'Course created successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
