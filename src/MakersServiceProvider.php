<?php

namespace Vdcastillo\LaravelMakers;
use Illuminate\Support\ServiceProvider;



class MakersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(MakeRepository::class);
        $this->commands(MakeService::class);
    }
}
