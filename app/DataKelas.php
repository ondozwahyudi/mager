<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Questions;

class DataKelas extends Model
{
    protected $fillable = [
        'user_id', 'kelas_id', 'status'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\kelas');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
