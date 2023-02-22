<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schools\UpdateRequest;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\JsonResponse;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $data, School $school): JsonResponse
    {
        try {
            $school->update($data->only('name', 'logo', 'certificate'));

            return response()->json([
                'data' => new SchoolResource($school),
                'status' => 'success',
                'message' => 'School updated successfully'
            ], self::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on update School'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
