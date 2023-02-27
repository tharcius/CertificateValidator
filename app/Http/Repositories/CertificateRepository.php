<?php

namespace App\Http\Repositories;

use App\Http\Resources\CertificateResource;
use App\Interfaces\CertificateRepositoryInterface;
use App\Models\Certificate;
use Exception;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CertificateRepository implements CertificateRepositoryInterface
{
    public function __construct(private Certificate $certificate)
    {
    }

    public function getAllCertificates(): AnonymousResourceCollection
    {
        return CertificateResource::collection($this->certificate->all());
    }

    public function createCertificate($certificate): CertificateResource|false
    {
        try {
            $certificate['certificate_code'] = certificateCode();
            $resource = $this->certificate->create($certificate);
            $resource->student->courses()->sync([$certificate['course_id']]);

            return new CertificateResource($resource);
        } catch (Exception $e) {
            return false;
        }
    }

    public function getCertificate($certificateCode): CertificateResource|false
    {
        try {
            $resource = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            $resource->update(['viewed' => $resource->viewed++]);
            return new CertificateResource($resource);
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateCertificate($data, $certificateCode): CertificateResource|false
    {
        try {
            $certificate = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            if (!empty($data['course_id'])) {
                $certificate->student->courses()->sync([$data['course_id']]);
            }
            $certificate->update($data);

            return new CertificateResource($certificate);
        } catch (Exception $e) {
            return false;
        }
    }

    public function deleteCertificate($certificateCode): CertificateResource|false
    {
        try {
            $certificate = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            $certificate->deleteOrFail();

            return new CertificateResource($certificate);
        } catch (Exception $e) {
            return false;
        }
    }
}
