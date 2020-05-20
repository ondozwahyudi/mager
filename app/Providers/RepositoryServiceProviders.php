<?php

namespace App\Providers;

use App\Repository\Eloquent\KelasRepository;
use App\Repository\KelasRepositoryInterface;
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
        $this->app->bind(KelasRepositoryInterface::class, KelasRepository::class);
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
