<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

      // columns to fill
    protected $fillable = ['title', 'rating', 'age_restriction', 'description', 'premieres_at'];

    // broadcasts
    public function broadcasts()
    {
        return $this->hasMany(MovieBroadcast::class);
    }
}
