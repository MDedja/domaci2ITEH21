<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trener;

class Clan extends Model
{
    use HasFactory;

    public function trener()
    {
        return $this->belongsTo(Trener::class);
    }
}
