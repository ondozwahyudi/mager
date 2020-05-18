<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'uuid', 'nama_kelas', 'mapel', 'ruang', 'kode_kelas', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dk()
    {
        return $this->hasMany('App\DataKelas');
    }
}
