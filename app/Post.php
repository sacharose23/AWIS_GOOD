<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'title',
        'event_start_date',
        'event_end_date',
        'description',
        'address',
        'deadline',
        'url',
        'hours',
        'num_volunteers',
        'recurring_status',
        'gender_specific',
        'members_only',
        'org_name',
        'affiliated_orgs',
        'spoc',
        'spoc_phone',
        'spoc_email',
    ];
}
