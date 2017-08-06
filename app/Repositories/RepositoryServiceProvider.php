<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts;
use App\Repositories\Eloquent as Implementation;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $contracts = [
        Contracts\BaseInterface::class => Implementation\BaseRepository::class
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
