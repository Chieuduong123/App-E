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

    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'name',]);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }

    public function getNameAttribute() {
        if ($this->user) {
            return $this->user->name;
        }
       return null;
    }

}
