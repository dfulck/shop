<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('answer')
            ->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(product::class);
    }

    public function getQuestionAnswer(question $question)
    {
        $answers=$this->users()->where('question_id',$question->id)->get();

      return $answers;
    }

}
