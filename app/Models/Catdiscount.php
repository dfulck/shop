<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catdiscount extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getShowCategoryAttribute()
    {
       return category::query()->where('id',$this->category_id)->firstOrFail();
    }

}
