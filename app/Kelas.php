<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'uuid', 'nama_kelas', 'mapel', 'ruang', 'kode_kelas', 'created_by'
    ];
    public function user()
    {
        return $this->belongsToMany('App\User')->withPivot('status')->withTimestamps();
    }
}
