<?php

namespace App\Http\Controllers\Schools;

use App\Http\Requests\Schools\UpdateRequest;
use App\Http\Resources\SchoolResource;
use Illuminate\Http\JsonResponse;

class UpdateController extends SchoolController
{
    /**
     * Update a school.
     */
    public function __invoke(UpdateRequest $data, int $schoolId): JsonResponse
    {
        $school = $this->repository->updateSchool($data->only('name', 'logo', 'certificate'), $schoolId);

        if (!$school) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on update School'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => new SchoolResource($school),
                'status' => 'success',
                'message' => 'School updated successfully'
            ],
            self::HTTP_OK
        );
    }
}
