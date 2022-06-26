<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Table name
    protected $table = 'users';

    //attributes fillable
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'date_of_birth',
        'gender',
        'is_dead',
        'address_id',
        'president_id',
    ];

    //president 1 to 1
    public function president()
    {
        return $this->hasOne(President::class, 'president_id');
    }

    //address 1 to 1
    public function address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }
}
