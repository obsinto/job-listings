<?php

use Modules\Employer\Providers\EmployerServiceProvider;
use Modules\Job\Providers\JobServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    EmployerServiceProvider::class,
    JobServiceProvider::class,
];
