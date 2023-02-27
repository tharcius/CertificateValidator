<?php

namespace App\Http\Controllers\Schools;

use App\Http\Requests\Schools\CreateRequest;
use Illuminate\Http\JsonResponse;

class CreateController extends SchoolController
{
    /**
     * Create a new school.
     */
    public function __invoke(CreateRequest $school): JsonResponse
    {
        $data = $school->only('name', 'logo', 'certificate');

        $result = $this->repository->createSchool($data);

        if (!$result) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on create School'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $result,
                'status' => 'success',
                'message' => 'School created successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
