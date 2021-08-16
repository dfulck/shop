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
}
