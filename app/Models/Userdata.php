<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    
    protected $table = 'userdata';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'created_at',
        'permission',
        'gender',
        'postal_code',
        'education',
        'education_institution',
        'years_of_experience',
        'employment_commitment',
        'employment_type',
        'jobcategory',
        'monthly_salary',
        'job_title'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
