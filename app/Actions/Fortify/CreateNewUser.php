<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Storage;
use File;
use Request;
use App\Models\Photo;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


public function create(array $input)
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
       
        
    ])->validate();
 
    if (isset($input['photo'])) {
        $photo = $input['photo'];

        $ext = 'jpg';
            
            $image_name = 'image';
        
            
            $filename = 'image-' . time() . '.' . $ext;

            $path = $request->photo->storeAs('photos', $filename);
            $image_url = Storage::url($path);
        
            

            $image_url = Storage::url($path);

            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
               ])->photo()->create([
                "photo_name" => $filename,
                "photo_path" => $path,
                "photo_url" => $image_url,
                "photo_width" => 500,
                "photo_height" => 400
               ]);
    }
    return User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password']),
       ]);

 
    }
   
}
