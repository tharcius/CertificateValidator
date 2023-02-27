<?php

namespace App\Http\Repositories;

use App\Http\Resources\CourseResource;
use App\Interfaces\CourseRepositoryInterface;
use App\Models\Course;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CourseRepository implements CourseRepositoryInterface
{
    public function __construct(private Course $course)
    {
    }

    public function getAllCourses(): AnonymousResourceCollection
    {
        return CourseResource::collection($this->course->all());
    }

    public function createCourse($course): CourseResource|false
    {
        try {
            $resource = $this->course->create($course);

            return new CourseResource($resource);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getCourse($courseId): CourseResource|false
    {
        try {
            $result = $this->course->findOrFail($courseId);

            return new CourseResource($result);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateCourse($data, $courseId): CourseResource|false
    {
        try {
            $course = $this->course->findOrFail($courseId);
            $course->update($data);

            return new CourseResource($course);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteCourse($courseId): CourseResource|false
    {
        try {
            $course = $this->course->findOrFail($courseId);
            $course->deleteOrFail();

            return new CourseResource($course);
        } catch (\Exception $e) {
            return false;
        }
    }
}
