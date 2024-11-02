<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['title','content'];

    public function questions() {
        return $this->belongsTo(Question::class);
}
}
