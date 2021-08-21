<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class role extends Model
{
    use HasFactory;

    protected $guarded=[];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */


    public function permissions()
    {
        return $this->belongsToMany(permission::class);
    }

    public static function findByTitle($title)
    {
        return self::query()->whereTitle($title)->firstOrFail();

    }
}
