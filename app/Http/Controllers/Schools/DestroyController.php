<?php

namespace App\Http\Controllers\Schools;

use Illuminate\Http\JsonResponse;

class DestroyController extends SchoolController
{
    /**
     * Delete a school.
     */
    public function __invoke(int $schoolId): JsonResponse
    {
        $school = $this->repository->deleteSchool($schoolId);

        if (!$school) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on delete School'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $school,
                'status' => 'success',
                'message' => 'School deleted successfully'
            ],
            self::HTTP_OK
        );
    }
}
