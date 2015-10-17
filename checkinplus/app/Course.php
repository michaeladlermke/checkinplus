<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //The Course model creates an object from the database table classes
    protected $table = 'courses';
    protected $primaryKey = 'course_id';

    protected $fillable = [
        'course_name',
        'course_section_id',
        'course_location',
        'course_instructor'
    ];
    //
}
