<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title','body','user_id'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
