<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function category()
    {
        return $this->hasOne(Categories::class);
    }
}
