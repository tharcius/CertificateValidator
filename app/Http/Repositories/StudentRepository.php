<?php

namespace App\Http\Repositories;

use App\Http\Resources\StudentResource;
use App\Interfaces\StudentsRepositoryInterface;
use App\Models\Student;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class StudentRepository implements StudentsRepositoryInterface
{
    public function __construct(private Student $student)
    {
    }

    public function getAllStudents(): AnonymousResourceCollection
    {
        return StudentResource::collection($this->student->all());
    }

    public function createStudent(array $student): StudentResource|false
    {
        try {
            $resource = $this->student->create($student);

            return new StudentResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getStudent(int $studentId): StudentResource|false
    {
        try {
            $resource = $this->student->findOrFail($studentId);

            return new StudentResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateStudent(array $data, int $studentId): StudentResource|false
    {
        try {
            $student = $this->student->findOrFail($studentId);
            $student->update($data);

            return new StudentResource($student);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteStudent(int $studentId): StudentResource|false
    {
        try {
            $student = $this->student->findOrFail($studentId);
            $student->deleteOrFail();

            return new StudentResource($student);
        } catch (\Exception $e) {
            return false;
        }
    }
}
