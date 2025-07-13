<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Category extends Model
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){

        $category = validator([
            'name' => "required",
            'description' => "required",
            'image' => "nullabale",
            'status' => "required"
        ]);

       $category = new Category ;

        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category_create')->with('success','Category Save Successfull');
    }
}



