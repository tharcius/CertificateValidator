<?php

namespace App\Http\Controllers\Certificates;


use Illuminate\Http\JsonResponse;

class IndexController extends CertificateController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): JsonResponse
    {
        $certificates = $this->repository->getAllCertificates();
        return response()->json([
            'data' => $certificates,
            'status' => 'success',
            'message' => 'Certificates retrieved successfully'
        ],
            self::HTTP_OK);
    }
}
