<?php

namespace App\Http\Controllers\Students;

use App\Http\Requests\Students\UpdateRequest;
use Illuminate\Http\JsonResponse;

class UpdateController extends StudentController
{
    /**
     * Update a student.
     */
    public function __invoke(UpdateRequest $data, int $studentId): JsonResponse
    {
        $student = $this->repository->updateStudent($data->only('name', 'email'), $studentId);

        if (!$student) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on update Student'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $student,
                'status' => 'success',
                'message' => 'Student updated successfully'
            ],
            self::HTTP_OK
        );
    }
}
