<?php

namespace App\Providers;

use App\Repository\Eloquent\KelasRepository;
use App\Repository\Eloquent\QuestionsRepository;
use App\Repository\RepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when('App\Http\Controllers\HomeController')
            ->needs('App\Repository\RepositoryInterface')
            ->give('App\Repository\Eloquent\KelasRepository');

        // $this->app->bind(RepositoryInterface::class, KelasRepository::class,  QuestionsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
