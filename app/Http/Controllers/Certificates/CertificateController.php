<?php

namespace App\Http\Controllers\Certificates;

use App\Http\Controllers\Controller;
use App\Interfaces\CertificateRepositoryInterface;

class CertificateController extends Controller
{
    public function __construct(protected CertificateRepositoryInterface $repository)
    {
    }
}
