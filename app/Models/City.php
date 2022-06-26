<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //table name
    protected $table = 'citys';

    //attributes fillable
    protected $fillable = [
        'name',
        'state_id',
    ];

    //state 1 to n
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
