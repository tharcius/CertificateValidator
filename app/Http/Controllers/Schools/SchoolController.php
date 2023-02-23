<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\Interfaces\SchoolRepositoryInterface;

class SchoolController extends Controller
{
    public function __construct(protected SchoolRepositoryInterface $repository)
    {
    }
}
