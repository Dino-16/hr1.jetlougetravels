<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    protected $table = "offer";

    protected $fillable = [
        'candidate_name',
        'job_title',
        'offer_date',
        'expiration_date',
        'offer_amount',
        'status',
    ];
}
