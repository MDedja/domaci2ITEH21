<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Clan extends Model
{
    use HasFactory;

    protected $fillable = [
        'sifra',
        'ime',
        'prezime',
        'godine',
        'adresa',
        'trener_id'
    ];

    public function trener()
    {
        return $this->belongsTo(Trener::class);
    }
}
