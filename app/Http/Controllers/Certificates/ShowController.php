<?php

namespace App\Http\Controllers\Certificates;

use Illuminate\Http\JsonResponse;

class ShowController extends CertificateController
{
    /**
     * Return a certificate.
     */
    public function __invoke($certificateCode): JsonResponse
    {
        $certificate = $this->repository->getCertificate($certificateCode);

        certificateCode();
        if (!$certificate) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on search certificate'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $certificate,
                'status' => 'success',
                'message' => 'Certificate found successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
