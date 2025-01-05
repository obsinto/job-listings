<?php

namespace Modules\Job\Providers;

use Carbon\Laravel\ServiceProvider;

class JobServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'job');
    }
}
