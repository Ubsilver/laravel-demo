<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    public function tour()
    {
        return $this->belongsTo(Tours::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
