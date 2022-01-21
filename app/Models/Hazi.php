<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazi extends Model
{
    use HasFactory;

    protected $fillable = ['diak', 'url'];

    protected $visible = [
        'id',
        'diak',
        'url',
    ];
}
