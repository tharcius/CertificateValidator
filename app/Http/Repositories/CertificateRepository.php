<?php

namespace App\Http\Repositories;

use App\Http\Resources\CertificateResource;
use App\Interfaces\CertificateRepositoryInterface;
use App\Models\Certificate;
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

    public function createCertificate(array $certificate): CertificateResource|false
    {
        $certificate['certificate_code'] = certificateCode();
        try {
            $resource = $this->certificate->create($certificate);
            $resource->course->certificates()->sync([$certificate['certificate_id']]);

            return new CertificateResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getCertificate(string $certificateCode): CertificateResource|false
    {
        try {
            $resource = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            $resource->update(['viewed' => $resource->viewed++]);
            return new CertificateResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateCertificate(array $data, string $certificateCode): CertificateResource|false
    {
        try {
            $certificate = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            if (!empty($data['course_id'])) {
                $certificate->student->courses()->sync([$data['course_id']]);
            }
            $certificate->update($data);

            return new CertificateResource($certificate);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteCertificate(string $certificateCode): CertificateResource|false
    {
        try {
            $certificate = $this->certificate->where('certificate_code', $certificateCode)->firstOrFail();
            $certificate->deleteOrFail();

            return new CertificateResource($certificate);
        } catch (\Exception $e) {
            return false;
        }
    }
}
