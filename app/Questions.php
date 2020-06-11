<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Kelas;
use App\Answers;
use Illuminate\Support\Str;

class Questions extends Model
{

    protected $fillable = ['uuid','title', 'body','user_id', 'kelas_id'];

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value,'-');
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getBodyHtmlAttribute()
    {
        $parsedown = new \Parsedown;
        $parsedown->setSafeMode(true);
        return \Parsedown::instance()->text($this->body);
    }
}
