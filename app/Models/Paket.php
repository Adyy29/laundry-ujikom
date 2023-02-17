<?php

namespace App\Models;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'pakets';
    protected $primaryKey = "id";
    protected $guarded =['id'];

    public function user() {
        return $this->belongsToMany(Outlet::class);
    }

}
