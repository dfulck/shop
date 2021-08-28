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
//for Admin panel dont change
    public function child($category)
    {
       return category::query()->where('id',$category)->firstOrFail();
    }
    //end

    public function getAllSubCategoryProductAttribute()
    {
        $children_Ids=$this->childiren()->pluck('id');

        return product::query()->whereIn('category_id',$children_Ids)->get();
    }

    public function getHasChildirenAttribute()
    {
       return $this->childiren()->exists();
    }

    public function propertyGroups()
    {
        return $this->belongsToMany(PropertyGroup::class);
    }

    public function HasPropertyGroup(PropertyGroup $propertyGroup)
    {

       return $this->propertyGroups()
            ->where('property_group_id',$propertyGroup->id)
            ->exists();


    }
}
