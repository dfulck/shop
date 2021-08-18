<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
class product extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function pictures()
    {
        return $this->hasMany(picture::class);
    }


    public function addpicture($request)
    {

        $this->pictures()->create([
            'path'=>$request->file('path')->storeAs('public/product/image',$request->file('path')->getClientOriginalName()),
            'mime'=>$request->file('path')->getClientMimeType()
        ]);
    }

    public function deletePicture($picture)
    {
        Storage::delete($picture->path);

        $picture->delete();
    }


    public function discount()
    {
        return $this->hasOne(discount::class);
    }

    public function createDiscount($request)
    {
        $this->discount()->create([
            'discount'=>$request->get('discount'),
        ]);
    }

    public function DestroyDiscount()
    {
        $this->discount()->delete();
    }

    public function CostDiscount()
    {
        if ($this->discount()->exists()) {
            return $this->cost - $this->cost * $this->discount->discount / 100;
        }
            return $this->cost;

    }


}
