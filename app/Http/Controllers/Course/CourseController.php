<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Interfaces\CourseRepositoryInterface;

class CourseController extends Controller
{
    public function __construct(protected CourseRepositoryInterface $repository)
    {
    }
}
