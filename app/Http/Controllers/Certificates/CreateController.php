<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use App\Http\Requests\Certificates\CreateRequest;
use Illuminate\Http\JsonResponse;

class CreateController extends CertificateController
{
    /**
     * Create a new certificate.
     */
    public function __invoke(CreateRequest $certificate): JsonResponse
    {
        $data = $certificate->only('course_id', 'school_id', 'student_id', 'conclusion_date');
        $result = $this->repository->createCertificate($data);

        if (!$result) {
            return response()->json(
                [
                    'data' => null,
                    'status' => 'error',
                    'message' => 'Fail on create Student'
                ],
                self::HTTP_UNPROCESSABLE_ENTITY
            );
        }
        return response()->json(
            [
                'data' => $result,
                'status' => 'success',
                'message' => 'Student created successfully'
            ],
            self::HTTP_CREATE_OK
        );
    }
}
