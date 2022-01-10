<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teretana;
use App\Models\Clan;

class Trener extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'radno_iskustvo',
        'plata',
        'teretana_id'
    ];

    public function teretana()
    {
        return $this->belongsTo(Teretana::class);
    }

    public function clanovi()
    {
        return $this->hasMany(Clan::class);
    }
}
