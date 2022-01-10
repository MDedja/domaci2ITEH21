<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Teretana extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv_teretane',
        'lokacija',
        'grad',
        'broj_clanova'
    ];

    public function treneri()
    {
        return $this->hasMany(Trener::class);
    }
}
