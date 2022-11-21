<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;
use Storage;
use File;
use Auth;

class GalleryCOntroller extends Controller
{
    public function showAddGallery(){
        return view('admin.add_gallery');
    }

    public function create(Request $request){
        if($request->hasFile('photo')){
            
            $ext = $request->file('photo')->extension();
            $filename = 'gallery-' . time() . '.' . $ext;
            
         $path = $request->file('photo')->storeAs('photo-gallery', $filename);
         $image_url = Storage::url($path);
       
          $image_url = Storage::url($path);

          $data = $this->getDimension($path);
          $width = $data['width'];
          $height = $data['height'];


          $gallery = PhotoGallery::create([
            'photo_title' => $request->gallery_title,
            'photo_description' => $request->gallery_description
         ]);

         $gallery->photo()->create([
            "photo_name" => $filename,
            "photo_path" => $path,
            "photo_url" => $image_url,
            "photo_width" => $width,
            "photo_height" => $height
           ]);
        }
    }

    public function galleryComment(PhotoGallery $photo, Request $request){
         $photo->comments()->create([
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
          ]);
    }
    
    public static function getDimension($path){
        [$width,$height] = getimagesize(Storage::path($path));

        $data = [
            "width" => $width,
            "height" => $height
        ];
         return $data; 
    }
}
