<?php

namespace App\Http\Controllers\Schools;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends SchoolController
{
    /**
     * Return an array of data in JSON format with all schools.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $courses = $this->repository->getAllSchools();
        return response()->json([
            'data' => $courses,
            'status' => 'success',
            'message' => 'Schools retrieved successfully'
        ], self::HTTP_OK);
    }
}
