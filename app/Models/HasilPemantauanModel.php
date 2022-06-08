<?php

namespace App\Models;

use Database\Seeders\TitikPemantauan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HasilPemantauanModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hasil_pemantauan';

    protected $fillable = [
        'id',
        'titik_pemantauan',
        'tanggal_pemantauan',
        'waktu_pemantauan',
        'laboratorium',
        'cuaca',
        'temperatur',
        'tds',
        'tds',
        'tss',
        'ph',
        'bod',
        'cod',
        'do',
        'sulfat',
        'clorida',
        'nitrat',
        'nitrit',
        'amoniak',
        'fosfat',
        'sianida',
        'merkuri',
        'besi',
        'mangan',
        'seng',
        'kromium',
        'detergen',
        'fenol',
        'fecal_coliform',
        'total_coliform'
    ];

    protected $hidden = [];

    public function TitikPemantauan()
    {
        return $this->belongsTo(TitikPemantauanModel::class, 'titik_pemantauan', 'id');
    }
}
