<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'minimun_primanja',
        'minimum_zaposlen',
        'minimalni_iznos',
        'maksimalni_iznos',
        'minimalni_period',
        'maksimalni_period',
        'kamatna_stopa'
    ];
}
