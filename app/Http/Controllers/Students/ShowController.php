<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\JsonResponse;

class ShowController extends StudentController
{
    /**
     * Return a student.
     */
    public function __invoke($studentId): JsonResponse
    {
        $student = $this->repository->getStudent($studentId);

        if (!$student) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on search Student'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $student,
                'status' => 'success',
                'message' => 'Student found successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
