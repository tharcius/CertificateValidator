<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schools\CreateRequest;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\JsonResponse;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateRequest $school): JsonResponse
    {
        $data = $school->only('name', 'logo', 'certificate');

        try {
            $result = School::create($data);
            $teste = new SchoolResource($result);
            return response()->json([
                'data' => new SchoolResource($result),
                'status' => 'success',
                'message' => 'School created successfully'
            ], self::HTTP_CREATE_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Fail on create School'
            ], self::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
