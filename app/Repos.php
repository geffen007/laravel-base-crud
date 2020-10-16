<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repos extends Model
{
    protected $fillable = [
        'nome', 'eta', 'description',
    ];
}
