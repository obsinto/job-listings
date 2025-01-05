<?php

namespace Modules\Employer\Providers;

use Carbon\Laravel\ServiceProvider;

class EmployerServiceProvider extends ServiceProvider
{


    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'employer');

    }
}
