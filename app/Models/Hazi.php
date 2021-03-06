<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev',
        'bekuldes',
        'jegy',
        'ertekeles',
        'url',
    ];

    protected $visible = [
        'id',
        'nev',
        'bekuldes',
        'jegy',
        'ertekeles',
        'url',
    ];
}
