<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use File;
use Storage;
use Hash;

class AdminController extends Controller
{
    function getDashboard(){
        return view('admin.admin_panel');
    }

    public function create(Request $request){
       
           
    
            $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
            ]);
                //    $user->photo()->create([
                //     "photo_name" => $filename,
                //     "photo_path" => $path,
                //     "photo_url" => $image_url,
                //     "photo_width" => 500,
                //     "photo_height" => 400
                //    ]);
        
                   if($request->hasFile('photo')){
            
                    $ext = $request->file('photo')->extension();
                    
                    $image_name = 'image';
                   
                    
                    $filename = 'image-' . time() . '.' . $ext;
                    
                
               
                 $path = $request->file('photo')->storeAs('photos', $filename);
                 $image_url = Storage::url($path);
               
                 
    
                //   $image_url = Storage::url($path);
                
             
                 $data = $this->getDimension($path);
                 $width = $data['width'];
                 $height = $data['height'];
    
                
    
                 $user->photo()->create([
                    "photo_name" => $filename,
                    "photo_path" => $path,
                    "photo_url" => $image_url,
                    "photo_width" => $width,
                    "photo_height" => $height
                ]);
    
           }

           if($user){
               return redirect('router');
           }
    }

    public function updateProfile(){
        return view('admin.update_profile');
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
