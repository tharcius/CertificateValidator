<?php

namespace App\Http\Controllers\Schools;

use Illuminate\Http\JsonResponse;

class ShowController extends SchoolController
{
    /**
     * Return a school.
     */
    public function __invoke(int $schoolId): JsonResponse
    {
        $school = $this->repository->getSchool($schoolId);

        if (!$school) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on search School'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $school,
                'status' => 'success',
                'message' => 'School found successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
