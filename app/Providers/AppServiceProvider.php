<?php

namespace App\Providers;

use App\Http\Repositories\CertificateRepository;
use App\Http\Repositories\CourseRepository;
use App\Http\Repositories\SchoolRepository;
use App\Http\Repositories\StudentRepository;
use App\Interfaces\CertificateRepositoryInterface;
use App\Interfaces\CourseRepositoryInterface;
use App\Interfaces\SchoolRepositoryInterface;
use App\Interfaces\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(SchoolRepositoryInterface::class, SchoolRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(CertificateRepositoryInterface::class, CertificateRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
