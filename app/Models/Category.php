<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class Category extends Model
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){

        $category = validator([
            'name' => "required",
            'description' => "required",
            'image' => "mimes:jpg,jpeg,png",
            'status' => "required"
        ]);
        
        $image_full_name = '';
        if(!empty($request->image)){
            $image_name = time().'.'.$request->image->extension();
            $image_full_name = $request->image->move(public_path('images/category_image'), $image_name);
        }


       $category = new Category ;

        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $image_full_name;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category_create')->with('success','Category Save Successfull');
    }

    public function category(){
        return view('category.view_cate');
    }
}





