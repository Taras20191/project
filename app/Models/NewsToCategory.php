<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsToCategory extends Model
{
    use HasFactory;

    public function news()
    {
        return $this->hasOne(News::class);
    }
}
