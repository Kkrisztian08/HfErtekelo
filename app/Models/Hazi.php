<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazi extends Model
{
    use HasFactory;

    protected $fillable = ['diak', 'url','jegy','ertekeles'];

    protected $visible = [
        'id',
        'diak',
        'url',
        'jegy',
        'ertekeles',
    ];
}
