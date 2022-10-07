<?php

namespace App\Providers;


use App\Repository\Eloquent\CampaignRepository;
use App\Repository\Eloquent\MainRepository;
use App\Repository\Interfaces\CampaignInterface;
use App\Repository\Interfaces\MainRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MainRepositoryInterface::class, MainRepository::class);
        $this->app->bind(CampaignInterface::class, CampaignRepository::class);


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
