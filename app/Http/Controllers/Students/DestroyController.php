<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\JsonResponse;

class DestroyController extends StudentController
{
    /**
     * Delete a student.
     */
    public function __invoke(int $studentId): JsonResponse
    {
        $student = $this->repository->deleteStudent($studentId);

        if (!$student) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on delete Student'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $student,
                'status' => 'success',
                'message' => 'Student deleted successfully'
            ],
            self::HTTP_OK
        );
    }
}
