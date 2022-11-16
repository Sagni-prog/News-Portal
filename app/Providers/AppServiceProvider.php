<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Post;
use App\models\Catagory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $recent_news_data = Post::orderBy('id','desc')->get();
        $popular_news_data = Post::orderBy('visitors','desc')->get();

        view()->share('global_recent_news_data',$recent_news_data);
        view()->share('global_popular_news_data',$popular_news_data);
    }
}
