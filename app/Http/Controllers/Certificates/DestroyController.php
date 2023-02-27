<?php

namespace App\Http\Controllers\Certificates;

use Illuminate\Http\JsonResponse;

class DestroyController extends CertificateController
{
    /**
     * Delete a certificate.
     */
    public function __invoke($certificateCode): JsonResponse
    {
        $certificate = $this->repository->deleteCertificate($certificateCode);

        if (!$certificate) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on delete certificate'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $certificate,
                'status' => 'success',
                'message' => 'Certificate deleted successfully'
            ],
            self::HTTP_OK
        );
    }
}
