<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PropertyGroup extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function Properties(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(property::class);
    }


}

