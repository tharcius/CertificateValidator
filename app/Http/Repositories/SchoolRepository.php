<?php

namespace App\Http\Repositories;

use App\Http\Resources\SchoolResource;
use App\Interfaces\SchoolRepositoryInterface;
use App\Models\School;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SchoolRepository implements SchoolRepositoryInterface
{
    public function __construct(private School $school)
    {
    }

    public function getAllSchools(): AnonymousResourceCollection
    {
        return SchoolResource::collection($this->school->all());
    }

    public function createSchool($school): SchoolResource|false
    {
        try {
            $result = $this->school->create($school);

            return new SchoolResource($result);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getSchool($schoolId): SchoolResource|false
    {
        try {
            $resource = $this->school->findOrFail($schoolId);

            return new SchoolResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateSchool($data, $schoolId): SchoolResource|false
    {
        try {
            $school = $this->school->findOrFail($schoolId);
            $school->update($data);

            return new SchoolResource($school);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteSchool($schoolId): SchoolResource|false
    {
        try {
            $school = $this->school->findOrFail($schoolId);
            $school->deleteOrFail();

            return new SchoolResource($school);
        } catch (\Exception $e) {
            return false;
        }
    }
}
