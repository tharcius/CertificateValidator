<?php

namespace App\Http\Controllers\Students;

use Illuminate\Http\JsonResponse;

class IndexController extends StudentController
{
    /**
     * Return an array of data in JSON format with all schools.
     */
    public function __invoke(): JsonResponse
    {
        $students = $this->repository->getAllStudents();
        return response()->json([
            'data' => $students,
            'status' => 'success',
            'message' => 'Students retrieved successfully'
        ], self::HTTP_OK);
    }
}
