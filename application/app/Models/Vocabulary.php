<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;
    protected $fillable = [
        
    ];

    public function vocabulary()
    {
        return $this->belongsTo(Kind::class,'kind_id');
    }
}
