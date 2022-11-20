<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Post;
use App\models\Catagory;

class AppServiceProvider extends ServiceProvider
{
  
    public function register()
    {
        //
    }

    public function boot()
    {
        $recent_news_data = Post::orderBy('id','desc')->get();
        $popular_news_data = Post::orderBy('visitors','desc')->get();

        $catagories_data = Catagory::with('subCatagories')
        ->where('show_on_menu','show')
        ->whereHas('subCatagories',function($query){
           $query->where('show_on_menu','show');
     })->get();

        view()->share('global_recent_news_data',$recent_news_data);
        view()->share('global_popular_news_data',$popular_news_data);
        view()->share('global_catagories',$catagories_data);
    }
}
