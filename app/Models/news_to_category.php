<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_to_category extends Model
{
    use HasFactory;

    public function news()
    {
        return $this->hasOne(News::class);
    }


}
