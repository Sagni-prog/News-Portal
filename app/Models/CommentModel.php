<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','comment','is_comment_edited'];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function commentable(){
        return $this->MorphTo();
    }
}
