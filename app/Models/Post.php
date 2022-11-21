<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
                            'admin_id',
                            'author_id',
                            'post_title',
                            'post_detail',
                            'sub_catagory_id',
                            'visitors',
                            'is_sharable',
                            'is_commentable'
                    ];

    public function subCatagory(){
        return $this->belongsTo(Subcatagory::class,'sub_catagory_id');
          }
    public function catagory(){
        return $this->belongsTo(Catagory::class,'catagory_id');
          }

          public function author(){
            return $this->belongsTo(User::class,'admin_id');
          }

          public function tags(){
            return $this->hasMany(Tag::class);
          }

          public function photos(){
              return $this->morphMany(Photo::class,'photoable');
          }
          public function photo(){
              return $this->morphOne(Photo::class,'photoable');
          }
          public function comments(){
              return $this->MorphMany(CommentModel::class,'commentable');
          }
          public function likes(){
              return $this->MorphMany(Like::class,'likeable');
          }
    }
