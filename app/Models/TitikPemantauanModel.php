<?php

namespace App\Models;

use Database\Seeders\HasilPemantauan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class TitikPemantauanModel extends Model
{
    use HasFactory;

    protected $table = 'titik_pemantauan';


    protected $fillable = [
        'id',
        'nama',
        'latitude',
        'longitude',
        'nama_sungai',
        'kecamatan',
        'mutu_air',
    ];

    protected $hidden = [];

    public function HasilPemantauan()
    {
        return $this->hasMany(HasilPemantauanModel::class);
    }

    public function StatusMutu()
    {
        return $this->belongsTo(StatusMutuModel::class, "mutu_air", "id");
    }

    public function allData()
    {
        $results = DB::table('titik_pemantauan')
            ->select('id', 'nama', 'latitude', 'longitude', 'mutu_air')
            ->get();
        return $results;
    }

    public function getInfo($id = '')
    {
        $results = DB::table('titik_pemantauan')
            ->select('titik_pemantauan.id', 'nama', 'latitude', 'longitude', 'nama_sungai', 'kecamatan', 'mutu_air', 'nama_status', 'kelas_status')
            ->leftJoin('status_mutu', 'status_mutu.id', '=', 'titik_pemantauan.mutu_air')
            ->where('titik_pemantauan.id', $id)
            ->get();
        return $results;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($tp) {
            // DB::table("hasil_pemantauan")->where('titik_pemantauan', $tp->id)->delete();
            HasilPemantauanModel::where("titik_pemantauan", $tp->id)->delete();
        });
    }
}
