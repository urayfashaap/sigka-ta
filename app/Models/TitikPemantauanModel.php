<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class TitikPemantauanModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'titik_pemantauan';


    protected $fillable = [
        'id',
        'nama',
        'latitude',
        'longitude',
        'nama_sungai',
        'mutu_air',
    ];

    protected $hidden = [];

    public function HasilPemantauan()
    {
        return $this->hasMany(HasilPemantauanModel::class);
    }

    public function StatusMutu()
    {
        return $this->belongsTo(StatusMutuModel::class);
    }

    public function allData()
    {
        $results = DB::table('titik_pemantauan')
            ->select('id', 'nama', 'latitude', 'longitude',)
            ->get();
        return $results;
    }

    public function getInfo($id = '')
    {
        $results = DB::table('titik_pemantauan')
            ->select('id', 'nama', 'latitude', 'longitude', 'nama_sungai', 'kecamatan', 'mutu_air')
            ->where('id', $id)
            ->get();
        return $results;
    }
}
