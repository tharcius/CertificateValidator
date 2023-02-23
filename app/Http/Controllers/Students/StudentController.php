<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Interfaces\StudentsRepositoryInterface;

class StudentController extends Controller
{
    public function __construct(protected StudentsRepositoryInterface $repository)
    {
    }
}
