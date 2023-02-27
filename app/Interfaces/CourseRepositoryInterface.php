<?php

namespace App\Interfaces;

use App\Http\Resources\CourseResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

interface CourseRepositoryInterface
{
    public function getAllCourses(): AnonymousResourceCollection;
    public function createCourse(array $course): CourseResource|false;
    public function getCourse(int $courseId): CourseResource|false;
    public function updateCourse(array $data, int $courseId): CourseResource|false;
    public function deleteCourse(int $courseId): CourseResource|false;
}
