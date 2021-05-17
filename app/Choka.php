<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choka extends Model
{
    protected $table = 'choka';
    
    protected $fillable = [
        'id', 'title', 'date', 'spot', 'fish', 'comment'
    ];
}
