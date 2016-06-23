<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

use App\Models\Department;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // For polymorphic 'person' relation:
        Relation::morphMap([
            'student' => \App\Models\Student::class,
            'lecturer' => \App\Models\Lecturer::class
        ]);

        view()->share('departments', Department::all()->sortBy('name'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
