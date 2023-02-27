<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Requests\Certificates\UpdateRequest;
use App\Http\Resources\CertificateResource;
use Illuminate\Http\JsonResponse;

class UpdateController extends CertificateController
{
    /**
     * Update a certificate.
     */
    public function __invoke(UpdateRequest $data, $certificateCode): JsonResponse
    {
        $certificate = $this->repository->updateCertificate($data->only('conclusion_date', 'course_id', 'school_id'), $certificateCode);

        if (!$certificate) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Fail on update certificate'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => new CertificateResource($certificate),
                'status' => 'success',
                'message' => 'Certificate updated successfully'
            ],
            self::HTTP_OK
        );
    }
}
