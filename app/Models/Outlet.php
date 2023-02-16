<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';
    protected $primaryKey = "id";
    protected $guarded = ['id'];

    public function scopeFilter($query) {
            if (request('search')) {
                return $query->where('nama', 'like', '%' . request('search') . '%')
                             ->orWhere('jalan', 'like', '%' . request('search') . '%')
                             ->orWhere('RT', 'like', '%' . request('search') . '%')
                             ->orWhere('RW', 'like', '%' . request('search') . '%')
                             ->orWhere('kecamatan', 'like', '%' . request('search') . '%')
                             ->orWhere('kabupaten', 'like', '%' . request('search') . '%')
                             ->orWhere('provinsi', 'like', '%' . request('search') . '%')
                             ->orWhere('negara', 'like', '%' . request('search') . '%')
                             ->orWhere('kode_pos', 'like', '%' . request('search') . '%');
            }
    }

    public function paket() {
        return $this->belongsTo(Paket::class);
    }
}
