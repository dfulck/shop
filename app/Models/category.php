<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(category::class,'category_id');
    }
    public function childiren()
    {
        return $this->hasMany(category::class,'category_id');
    }

    public function child($category)
    {
       return category::query()->where('id',$category)->firstOrFail();
    }

    public function GetAllSubCategoryProduct()
    {
        $children_Ids=$this->childiren()->pluck('id');

        return product::query()->whereIn('category_id',$children_Ids)->get();
    }
}
