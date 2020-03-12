<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $primaryKey = "id";
    protected $fillable = ['user_id',
        'uni_name',
        'dept_name',
        'start_year',
        'pass_year',
        'org_name',
        'designation',
        'contact_number',
        'address',
        'duration',
        'responsibilities',
        'exam_title',
        'major',
        'result'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
