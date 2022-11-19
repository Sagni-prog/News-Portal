<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlinePoll;

class OnlinePollController extends Controller
{

    public function show(){

        $online_poll = OnlinePoll::all();
        return view('admin.online_poll',compact('online_poll'));
    }

    public function addPoll(){
        return view('admin.add_online_poll');
    }
       
}
