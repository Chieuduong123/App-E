<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'user_id',
        'body',
    ];
    protected $appends = ['name'];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function getNameAttribute()
    {
        if ($this->user) {
            return $this->user->name;
        }
        return null;
    }
}
