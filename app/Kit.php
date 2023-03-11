<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
