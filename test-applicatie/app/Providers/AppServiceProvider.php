<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::define('edit-jobs', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });

        // Gate::define('update-jobs', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });

        // Gate::define('delete-jobs', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });
         
    }
}
