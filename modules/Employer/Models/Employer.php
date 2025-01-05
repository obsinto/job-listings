<?php

namespace Modules\Employer\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Job\Models\Job;

class Employer extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
