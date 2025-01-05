<?php

namespace Modules\Job\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Employer\Models\Employer;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
