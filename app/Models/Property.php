<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function PropertyGroup(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PropertyGroup::class);
}

    public function products()
    {
        return $this->belongsToMany(product::class)
            ->withPivot('value')
            ->withTimestamps();
    }
    public function GetValueProperties(product $product)
    {
        $IDproduct=$this->products()->where('product_id',$product->id);

        if (!$IDproduct->exists()){
            return null;
        }

        return $IDproduct->first()->pivot->value;
    }

}
