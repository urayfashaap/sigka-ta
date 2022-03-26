<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TitikPemantauanModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'titik_pemantauan';

    protected $fillable = [
        'id_titik',
        'nama',
        'latitude',
        'longitude',
        'nama_sungai',
        'kecamatan',
        'mutu_air',
    ];

    protected $hidden = [];
}
