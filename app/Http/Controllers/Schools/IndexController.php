<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $courses = School::all();
        return response()->json([
            'data' => $courses,
            'status' => 'success',
            'message' => 'Schools retrieved successfully'
        ], self::HTTP_OK);
    }
}
