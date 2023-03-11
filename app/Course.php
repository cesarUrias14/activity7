<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $fillable = [
        'title',
        'course_cover',
        'content',
        'kit_id',
    ];

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }
}
