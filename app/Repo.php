<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    protected $fillable = [
        'nome', 'eta', 'description',
    ];
}
