<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    //The Checkin model creates an object from the database table checkins
    protected $primaryKey = 'checkin_id';
}
