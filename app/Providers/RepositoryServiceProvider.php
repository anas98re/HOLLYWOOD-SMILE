<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\studentRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, studentRepository::class);
    }


    public function boot()
    {
        //
    }
}
