<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "track";
    protected $primaryKey = "id";
    protected $fillable = ['user_id', 'cv_pdf'];
}
