<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(School $school): JsonResponse
    {
        try {
            $school->deleteOrFail();

            return response()->json([
                'data' => new SchoolResource($school),
                'status' => 'success',
                'message' => 'School deleted successfully'
            ], self::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on delete School'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }}
