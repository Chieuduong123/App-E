<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'body',
    ];

    public function commentable(){

        return $this->morphTo();
 
    }
 

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function replies()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
 
}
