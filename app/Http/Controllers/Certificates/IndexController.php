<?php

namespace App\Http\Controllers\Certificates;

use Illuminate\Http\JsonResponse;

class IndexController extends CertificateController
{
    /**
     * Return an array of data in JSON format with all certificates.
     */
    public function __invoke(): JsonResponse
    {
        $certificates = $this->repository->getAllCertificates();
        return response()->json(
            [
            'data' => $certificates,
            'status' => 'success',
            'message' => 'Certificates retrieved successfully'
        ],
            self::HTTP_OK
        );
    }
}
