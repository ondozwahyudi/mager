<?php

namespace App;
use App\Questions;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = ['body', 'user_id', 'questions_id'];

    public function question()
    {
        return $this->belongsTo(Questions::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedDateAttribute()
    {
        //diffForHumans
        //format('d/m/Y');
        return $this->created_at->diffForHumans();
    }

    public function getBodyHtmlAttribute()
    {
        $parsedown = new \Parsedown;
        $parsedown->setSafeMode(true);
        return \Parsedown::instance()->text($this->body);
    }
}
