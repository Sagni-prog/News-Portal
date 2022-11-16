<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RouterController extends Controller
{
    public function route(){
        
           if(Auth::check()){ 
               if(Auth::user()->user_type === 1){
                return redirect('/dashboard');
            }
            else{
                return redirect('/');
              }
           }
        }
    } 

