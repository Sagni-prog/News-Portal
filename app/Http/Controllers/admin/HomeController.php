<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcatagory;
use App\Models\Catagory;
use App\Models\Setting;
use App\Models\Post;

class HomeController extends Controller
{
    public function getHome(){
        
        $setting = Setting::all()->first();
        $posts = Post::with('photos')->orderBy('id','desc')->get();

        $catagories = Catagory::with('subCatagories')
                            ->where('show_on_menu','show')
                            ->whereHas('subCatagories',function($query){
                               $query->where('show_on_menu','show');
                    })->get();
         $sub_catagory = Subcatagory::with('post','catagory')->get();
         $sub_catagory_data = Subcatagory::orderBy('sub_catagory_order','asc')->get();

        
      
       
   
          return view('home.home',compact('setting','posts','catagories','sub_catagory','sub_catagory_data'));
  }

  public function singlePost(Post $post, Request $request){

   
        $setting = Setting::all()->first();
            $catagories = Catagory::with('subCatagories')
            ->where('show_on_menu','show')
            ->whereHas('subCatagories',function($query){
              $query->where('show_on_menu','show');
        })->get();

        $sub_catagory = Subcatagory::with('post','catagory')->get();

          $old_value = $post->visitors;
          $new_value = $old_value + 1;
          $post->update([
              'visitors' => $new_value
        ]);


        $related_posts_catagory = Catagory::with('subCatagories')
                                    ->where('catagory_name',$post->subCatagory->catagory->catagory_name)->get();

      
         return view('home.single_post',compact('post','catagories','sub_catagory','setting','related_posts_catagory'));
  }

  public function singleRelatedPost(Post $posts){

    
       
    $setting = Setting::all()->first();
        $catagories = Catagory::with('subCatagories')
        ->where('show_on_menu','show')
        ->whereHas('subCatagories',function($query){
          $query->where('show_on_menu','show');
    })->get();

    $sub_catagory = Subcatagory::with('post','catagory')->get();

      $old_value = $posts->visitors;
      $new_value = $old_value + 1;
      $posts->update([
          'visitors' => $new_value
    ]);


    $related_posts_catagory = Catagory::with('subCatagories')
                                ->where('catagory_name',$posts->subCatagory->catagory->catagory_name)->get();

  
     return view('home.single_related_post',compact('posts','catagories','sub_catagory','setting','related_posts_catagory'));
}

        public function getSubCatagory($catagoryId){
            return $catagoryId;
       } 

       public function searchNews(Request $request){
           $post_data = Post::orderBy('id','desc');

           

           if($request->text != ''){
               $post_data = $post_data->where('post_title','like','%'.$request->text.'%');
           }

           if($request->sub_catagory != ''){
            $post_data = $post_data->where('sub_catagory_id',$request->sub_catagory);
           }

           $post_data = $post_data->with('subCatagory','photo')->get();

           $setting = Setting::all()->first();
        

       
           $sub_catagory = Subcatagory::with('post','catagory')->get();

           
             return view('home.post_by_catagory',compact('post_data','sub_catagory','setting'));
         }

         
       public function newsBySubCatagory(Subcatagory $sub_catagory, Request $request){

            
           $post_data =  $sub_catagory->post;

         $setting = Setting::all()->first();
     

          return view('home.post_by_catagory_2',compact('post_data','sub_catagory','setting'));
      }

         public function showContact(){
           return view('home.contact');
         }
     }
