<?php

namespace App\Interfaces;

use App\Http\Resources\StudentResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface StudentsRepositoryInterface
{
    public function getAllStudents(): AnonymousResourceCollection;
    public function createStudent(array $student): StudentResource|false;
    public function getStudent(int $studentId): StudentResource|false;
    public function updateStudent(array $data, int $studentId): StudentResource|false;
    public function deleteStudent(int $studentId): StudentResource|false;
}
