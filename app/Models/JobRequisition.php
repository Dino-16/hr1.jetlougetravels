<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequisition extends Model
{
    protected $table = 'job_requisitions';

    protected $fillable = [
        'requested_by',
        'department',
        'job_type',
        'description',
        'open_positions',
        'filled_positions',
        'salary',
        'priority',
        'status',
        'requested_date',
    ];
}
