<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMutuModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'status_mutu';

    protected $fillable = [
        'id',
        'nama_status',
        'kelas_status'
    ];

    protected $hidden = [];

    public function StatusMutu()
    {
        return $this->hasMany(StatusMutuModel::class);
    }
}
