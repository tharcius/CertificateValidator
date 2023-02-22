<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(School $school): JsonResponse
    {
        return response()->json([
            'data' => new SchoolResource($school),
            'status' => 'success',
            'message' => 'School found successfully'
        ], self::HTTP_OK);
    }
}
