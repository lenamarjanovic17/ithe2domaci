<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zahtev extends Model
{
    use HasFactory;

    protected $fillable = [
        'iznos',
        'period_otplate',
        'kredit_id',
        'user_id'
    ];

    public function kredit(){
        return $this->belongsTo(Kredit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
