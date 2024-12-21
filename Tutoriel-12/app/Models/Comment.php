<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'commentable'];
    public function commentable(){
        return $this->morphTo() ;
    }
}
