<?php

namespace App\Models;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    public function outlet() {
        return $this->hasMany(Outlet::class);
    }

}
