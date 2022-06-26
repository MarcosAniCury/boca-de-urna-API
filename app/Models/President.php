<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    //Table name
    protected $table = "presidents";

    //attributes fillable
    protected $fillable = [
        'name',
        'code',
    ];

    //user 1 to 1
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
