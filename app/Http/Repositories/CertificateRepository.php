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
            return new CertificateResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getCertificate(int $certificateId): CertificateResource|false
    {
        // TODO: Implement getCertificate() method.
    }

    public function updateCertificate(array $data, int $certificateId): CertificateResource|false
    {
        // TODO: Implement updateCertificate() method.
    }

    public function deleteCertificate(int $certificateId): CertificateResource|false
    {
        // TODO: Implement deleteCertificate() method.
    }
}
