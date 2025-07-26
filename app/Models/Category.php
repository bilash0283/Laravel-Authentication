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

        $request = validator([
            'name' => "required",
            'description' => "required",
            'image' => "mimes:jpg,jpeg,png",
            'status' => "required"
        ]);
        
        $imageFull_name = '';
        if(!empty($request->image)){
            $image_name = time().'.'.$request->image->extension();
            $imageFull_name = "images/category_image/".$image_name;
            $request->image->move(public_path('images/category_image'), $image_name);
        }


       $category = new Category ;

        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $imageFull_name;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category_create')->with('success','Category Save Successfull');
    }

    public function category(){
        $category = Category::orderBy('id', 'desc')->get();
        return view('category.view_cate',['categories' => $category]);
    }

    public function edit($id){
        $category = Category::find($id);
        return view('category.edit',['categories' => $category]);
    }

    public function cat_update(Request $request,$id){

        $category = Category::findOrFail($id);

        $request->validate([
            'name' => "required",
            'description' => "required",
            'image' => "mimes:jpg,jpeg,png",
            'status' => "required"
        ]);

        if($request->image){
            $oldImage = public_path($category->image);
            if(file_exists($oldImage) && is_file($oldImage)){
                unlink($oldImage);
            }

            $image_name = time().'.'.$request->image->extension();
            $imageFull_name = "images/category_image/".$image_name;
            $request->image->move(public_path('images/category_image'), $image_name);
            $category->image = $imageFull_name;
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = $request->status;

        $category->save();

        return redirect()->route('category_manage')->with('success','Category Update Successfull');

    }

    public function delete_cate($id){

        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('category_manage')->with('error', 'Category not found.');
        }
        if ($category->image) {
            $imagePath = public_path($category->image);
            if (file_exists($imagePath)) {
                @unlink($imagePath); 
            }
        }
        $category->delete();
        return redirect()->route('category_manage')->with('success', 'Category deleted successfully.');
    }

    

}





