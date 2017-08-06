<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts;
use App\Repositories\Eloquent;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $contracts = [
        Contracts\BaseInterface::class => Eloquent\BaseRepository::class
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach($this->contracts as $contract => $implementation) {
            $this->app->bind($contract, $implementation);
        }
    }
}
