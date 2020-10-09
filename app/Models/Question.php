<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'best_answer_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
