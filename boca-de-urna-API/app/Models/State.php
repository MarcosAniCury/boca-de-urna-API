<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //table name
    protected $table = 'states';

    //attributes fillable
    protected $fillable = [
        'name',
        'initials',
    ];

    //city n to 1
    public function city()
    {
        return $this->hasMany(City::class, 'id');
    }
}
