<?php

namespace App\Interfaces;

use App\Http\Resources\SchoolResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface SchoolRepositoryInterface
{
    public function getAllSchools(): AnonymousResourceCollection;
    public function createSchool(array $school): SchoolResource|false;
    public function getSchool(int $schoolId): SchoolResource|false;
    public function updateSchool(array $data, int $schoolId): SchoolResource|false;
    public function deleteSchool(int $schoolId): SchoolResource|false;
}
