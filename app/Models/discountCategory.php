<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discountCategory extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function categories()
    {
        return $this->belongsToMany(category::class);
    }
}
