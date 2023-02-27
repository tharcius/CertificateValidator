<?php

namespace App\Interfaces;

use App\Http\Resources\CertificateResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface CertificateRepositoryInterface
{
    public function getAllCertificates(): AnonymousResourceCollection;
    public function createCertificate(array $certificate): CertificateResource|false;
    public function getCertificate(string $certificateCode): CertificateResource|false;
    public function updateCertificate(array $data, string $certificateCode): CertificateResource|false;
    public function deleteCertificate(string $certificateCode): CertificateResource|false;
}
