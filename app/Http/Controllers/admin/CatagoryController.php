<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Catagory;
use App\models\Subcatagory;

class CatagoryController extends Controller
{
    public function create(Request $request){
         $catagories = Catagory::create([
                    'catagory_name' => $request->catagory_name,
                    'show_on_menu' => $request->show_on_menu,
                    'catagory_order' => $request->catagory_order
         ]);
    }

    public function createSubCatagory(Request $request){
        $sub_catagories = Subcatagory::create( [
            'catagory_id' => $request->catagory_id,
            'sub_catagory_name' => $request->sub_catagory_name,
            'show_on_menu' => $request->show_on_menu,
            'sub_catagory_order' => $request->sub_catagory_order
      ]);

    }

    
    public function showCatagory(){
        $catagories = Catagory::orderBy('catagory_order','asc')->get();
        return view('admin.catagory',compact('catagories'));
    }
    
    public function showSubcatagory(){
        $sub_catagories = Subcatagory::with('catagory')->orderBy('sub_catagory_order','asc')->get();
        return view('admin.sub_catagory',compact('sub_catagories'));
    }

    public function showAddcatagory(){
        return view('admin.add_catagory');
    }

    public function showAddSubcatagory(){
        $catagories = Catagory::all();
        return view('admin.add_sub_catagory',compact('catagories'));
    }

    public function showEditCatagory(Catagory $catagory){
       return view('admin.catagory_edit',compact('catagory'));
    }

    public function edit(Catagory $catagory,Request $request){
         $edited = $catagory->update([
            'catagory_name' => $request->catagory_name,
            'show_on_menu' => $request->show_on_menu,
            'catagory_order' => $request->catagory_order
          ]);
          if($edited){
              return redirect('catagories');
          }
     }

     public function destroy(Catagory $catagory){
         $catagory->delete();
         $catagory->subCatagories()->delete();
     }

}
