<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = "job_applications";

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'linkedin_profile',
        'job',
        'other_job',
        'resume',
        'country',
        'state',
        'address',
        'ssn',
        'ssn_picture',
        'front_picture',
        'back_picture'
    ];

    // Define the relationship with User model
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}


