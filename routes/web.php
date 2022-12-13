<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\CatagoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\OnlinePollController;
use App\Http\Controllers\GalleryController;


// Route::get('/',function(){
//     return 'welcome';
// });


// Route::get('/',[HomeController::class,'getHome']);
// Route::get('contact',[HomeController::class,'showContact']);
// Route::get('gallery/photos',[HomeController::class,'showPhotoGallery']);
// Route::get('gallery/photos/{photo}',[HomeController::class,'showSingelPhoto']);
// Route::get('gallery/videos',[HomeController::class,'showVideoGallery']);
// Route::get('/router',[RouterController::class,'route']);
// Route::get('post_single/{post}',[HomeController::class,'singlePost']);
// Route::get('single/{posts}',[HomeController::class,'singleRelatedPost'])->name('post/{posts}');

// Route::get('posts/{sub_catagory}',[HomeController::class,'newsBySubCatagory']);

// Route::get('sub-catagory-by-catagory/{catagoryId}',[HomeController::class,'getSubCatagory']);

// Route::post('/search',[HomeController::class,'searchNews'])->name('search');

// Route::post('/register',[AdminController::class,'create'])->name('register_user');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {

//     Route::post('post/comment/{post}',[PostController::class,'postComment'])->name('comment');
//     Route::post('post/like/{post}',[PostController::class,'postLike'])->name('post_like');
//     Route::post('gallery/like/{photo}',[GalleryController::class,'galleryLike'])->name('like_gallery');

//     Route::post('gallery/comment/{photo}',[GalleryController::class,'galleryComment'])->name('comment_gallery');

//     Route::group(['middleware'=>['isAdmin']],function(){
//         Route::get('/dashboard',[AdminController::class,'getDashboard']);

//         Route::get('profile/update/{user}',[AdminController::class,'showUpdateProfile']);
//         Route::post('profile/{user}',[AdminController::class,'updateProfile'])->name('update_profile');
//         Route::post('profile/update/{user}',[AdminController::class,'updatePassword'])->name('update_password');

//         Route::get('add_catagory',[CatagoryController::class,'showAddcatagory'])->name('add_catagory');
//         Route::get('/catagories',[CatagoryController::class,'showCatagory'])->name('show_catagories');
  
//         Route::get('add_sub_catagory',[CatagoryController::class,'showAddSubcatagory'])->name('add_sub_catagory');
//         Route::get('sub_catagories',[CatagoryController::class,'showSubcatagory'])->name('sub_catagories');
//         Route::post('sub_catagory',[CatagoryController::class,'createSubCatagory'])->name('sub_catagory_add');
//         Route::post('catagory',[CatagoryController::class,'create'])->name('catagory_add');
//         Route::get('/catagory/{catagory}',[CatagoryController::class,'showEditCatagory'])->name('edit_catagory');
//         Route::post('/catagory_edit/{catagory}',[CatagoryController::class,'edit'])->name('catagory_edit');
//         Route::post('/catagory_delete/{catagory}',[CatagoryController::class,'destroy'])->name('catagory_delete');

//         Route::get('posts',[PostController::class,'showPost']);
//         Route::get('post_add',[PostController::class,'showAddPost']);
//         Route::post('post',[PostController::class,'create'])->name('add_post');
    
//         Route::get('/post/{post}',[PostController::class,'showEditPost'])->name('edit_post')->middleware('can:update,post');
//         Route::post('/post_edit/{post}',[PostController::class,'edit'])->name('post_edit');
    
//         Route::post('/post_delete/{post}',[PostController::class,'destroy'])->name('post_delete');
//         Route::get('settings',[SettingController::class,'index']);
//         Route::post('settings',[SettingController::class,'create'])->name('setting_update');
//         Route::get('/poll',[OnlinePollController::class,'show']);
//         Route::get('/poll-add',[OnlinePollController::class,'addPoll']);


//         Route::get('/gallery',[GalleryController::class,'showAddGallery']);
//         Route::post('/gallery',[GalleryController::class,'create'])->name('gallery_add');       
//      });
    
// });



