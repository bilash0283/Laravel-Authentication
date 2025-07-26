<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Vlog extends Model
{
    public function create_vlog()
    {
        $category = Category::where('status',1)->orderBy('id','desc')->get();
        return view('vlog.create',['categoryes' => $category]);
    }

    public function vlog_store(Request $request){
        $request = validator([
            'name' => "required",
            'description' => "required",
            'category' => "required",
            'image' => "mimes:jpg,jpeg,png",
            'status' => "required"
        ]);

        $imageFull_name = '';
        if(!empty($request->image)){
            $image_name = time().'.'.$request->image->extension();
            $imageFull_name = "images/vlog_image/".$image_name;
            $request->image->move(public_path('images/category_image'), $image_name);
        }


       $vlog = new Vlog() ;

        $vlog->name = $request->name;
        $vlog->description = $request->description;
        $vlog->category = $request->category;
        $vlog->image = $imageFull_name;
        $vlog->status = $request->status;

        $vlog->save();

        return redirect()->route('vlog_manage')->with('success','Vlog Save Successfull');


    }

    public function vlog_manege(){
        $vlog = Vlog::orderBy('id','desc')->get();
        return view('vlog.manage_vlog');
    }




}

