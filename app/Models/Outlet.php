<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';
    protected $primaryKey = "id";
    protected $fillable =[
        'id','nama','nama_jalan','rt','rw','kode_pos','provinsi','kabupaten','kecamatan','gambar','hp'
    ];
}
