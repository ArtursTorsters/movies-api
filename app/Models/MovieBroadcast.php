<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieBroadcast extends Model
{
    use HasFactory;

    // columns to fill
    protected $fillable = ['movie_id', 'channel_nr', 'broadcasts_at'];

    // connect to movie model
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}