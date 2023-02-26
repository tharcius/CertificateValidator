<?php

namespace App\Interfaces;

use App\Http\Resources\CertificateResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface CertificateRepositoryInterface
{
    public function getAllCertificates(): AnonymousResourceCollection;
    public function createCertificate(array $certificate): CertificateResource|false;
    public function getCertificate(int $certificateId): CertificateResource|false;
    public function updateCertificate(array $data, int $certificateId): CertificateResource|false;
    public function deleteCertificate(int $certificateId): CertificateResource|false;
}
