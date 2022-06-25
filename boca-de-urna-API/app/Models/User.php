<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    //Table name
    protected $table = 'users';

    //Primary key collumn
    protected $primaryKey = "id";

    //Database Connection
    protected $connection = 'mysql';

    //attributes
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

}
