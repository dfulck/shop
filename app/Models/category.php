<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(product::class, 'category_id');
    }


    public function parent()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function childiren(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(category::class, 'category_id');
    }

//for Admin panel dont change
    public function child($category)
    {
        return category::query()->where('id', $category)->firstOrFail();
    }

    //end

    public function getAllSubCategoryProducts()
    {
        $childrenIds = $this->childiren()->pluck('id');
        return Product::query()
            ->whereIn('category_id', $childrenIds)
            ->orWhere('category_id', $this->id)
            ->get();
    }

    public function ChildirenProduct()
    {
        $child = $this->childiren()->first();
        return product::query()->where('id', $child->id)->get();
    }

    public function propertyGroups()
    {
        return $this->belongsToMany(PropertyGroup::class);
    }

    public function HasPropertyGroup(PropertyGroup $propertyGroup)
    {

        return $this->propertyGroups()
            ->where('property_group_id', $propertyGroup->id)
            ->exists();
    }

    public function LimitidProduct()
    {
        return product::query()
            ->where('category_id', $this->id)
            ->first();
    }

    public function HasCategoryChildirenProduct()
    {
        $items=collect($this->getAllSubCategoryProducts())->filter(function ($item){
            return $item;
        });

        return $items;
    }
}
