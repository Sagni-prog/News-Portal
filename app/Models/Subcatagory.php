<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    use HasFactory;

    protected $fillable = [
                           'catagory_id',
                           'sub_catagory_name',
                           'show_on_menu',
                           'sub_catagory_order'
               ];
        public function catagory(){
            return $this->belongsTo(Catagory::class);  
           }

           public function post(){
            return $this->hasMany(Post::class,'sub_catagory_id')->orderBy('id','desc');
        }
        }
