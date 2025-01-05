<?php

namespace App\Policies;

use App\Models\User;
use Modules\Job\Models\Job;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }

    public function update(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }

    public function delete(User $user, Job $job): bool
    {
        return $job->employer->user->id === 112;
    }

}
