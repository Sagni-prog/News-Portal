<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $fillable = ['photo_title','photo_description'];

    public function photo(){
        return $this->morphOne(Photo::class,'photoable');
    }
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
    public function comments(){
        return $this->MorphMany(CommentModel::class,'commentable');
    }
}
