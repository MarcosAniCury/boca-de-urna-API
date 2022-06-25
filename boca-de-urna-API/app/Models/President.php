<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    //Table name
    protected $table = "presidents";

    //Primary key collumn
    protected $primaryKey = "id";

    //Database Connection
    protected $connection = 'mysql';

    //Atributtes
    protected $attributes = [
        'name' => null,
        'code' => null,
    ];
}
