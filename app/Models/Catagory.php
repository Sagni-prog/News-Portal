<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $fillable = [
                  'catagory_name',
                  'show_on_menu',
                  'catagory_order'
           ];
    public function subCatagories(){
        return $this->hasMany(Subcatagory::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
