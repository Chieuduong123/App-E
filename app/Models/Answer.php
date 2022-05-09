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

    protected $appends = ['name'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function replies()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class)->select(['name']);
    }

    public function getNameAttribute()
    {
        if ($this->user) {
            return $this->user->name;
        }
        return null;
    }
}
