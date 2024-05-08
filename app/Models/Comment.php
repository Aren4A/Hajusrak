<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function chirp()
    {
        return $this->belongsTo(Chirp::class);
    }

    protected $fillable = [
        'content',
    ];
}
