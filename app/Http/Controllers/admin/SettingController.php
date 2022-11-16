<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::all()->first();
        return view('admin.setting',compact('setting'));
    }

    public function create(Request $request){
        $setting = Setting::all()->first();
        if($setting->count() === 0){
            Setting::create([
                'news_ticker_number' => $request->news_ticker_number,
                'news_ticker_status' => $request->news_ticker_status
            ]);

            return back();
        }
        else{
            Setting::all()->first()->update([
                'news_ticker_number' => $request->news_ticker_number,
                'news_ticker_status' => $request->news_ticker_status
            ]);
            
            return back();
        }
    }
}
