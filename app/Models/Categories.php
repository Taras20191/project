<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function news()
    {
        return $this->hasMany(News::Class);
    }

    public function getPage($page, $limit)
    {
        return $this->offset(($page - 1) * $limit)
            ->limit($limit)
            ->get();
    }

}
