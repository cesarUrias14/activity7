<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'group_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
