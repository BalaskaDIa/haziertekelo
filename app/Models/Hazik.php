<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev',
        'bekuldes',
        'jegy',
    ];

    protected $visible = [
        'id',
        'nev',
        'bekuldes',
        'jegy',
    ];
}
