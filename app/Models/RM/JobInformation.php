<?php

namespace App\Models\RM;

use Illuminate\Database\Eloquent\Model;

class JobInformation extends Model
{
    protected $table = 'job_information';

    protected $fillable = [
        'job_title',
        'job_type',
        'job_description',
        'job_arrangement',
        'job_summary',
        'job_responsibilities',
        'job_qualifications',
    ];
}
