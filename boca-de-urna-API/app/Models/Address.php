<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //table name
    protected $table = 'adress';

    //attributes fillable
    protected $fillable = [
        'neighborhood',
        'street',
        'number',
        'complement',
        'city_id',
    ];

    //user 1 to 1
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
