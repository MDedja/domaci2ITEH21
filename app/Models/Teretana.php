<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Teretana extends Model
{
    use HasFactory;

    public function treneri()
    {
        return $this->hasMany(Trener::class);
    }
}
