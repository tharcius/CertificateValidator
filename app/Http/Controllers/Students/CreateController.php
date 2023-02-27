<?php

namespace App\Http\Controllers\Students;

use App\Http\Requests\Students\CreateRequest;
use Illuminate\Http\JsonResponse;

class CreateController extends StudentController
{
    /**
     * Create a new student.
     */
    public function __invoke(CreateRequest $student): JsonResponse
    {
        $data = $student->only('name', 'email');

        $result = $this->repository->createStudent($data);

        if (!$result) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on create Student'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $result,
                'status' => 'success',
                'message' => 'Student created successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
