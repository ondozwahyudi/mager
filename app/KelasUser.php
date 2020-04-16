<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasUser extends Model
{
    protected $fillable = [
        'user_id', 'kelas_id', 'status'
    ];
}
