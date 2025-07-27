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

   public function vlog_store(Request $request)
    {
        $validated = $request->validate([
            'name' => "required",
            'description' => "required",
            'category' => "required",
            'image' => "nullable|mimes:jpg,jpeg,png",
            'status' => "required"
        ]);

        $imageFull_name = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/vlog_image'), $image_name);
            $imageFull_name = 'images/vlog_image/' . $image_name;
        }

        $vlog = new Vlog();
        $vlog->name = $validated['name'];
        $vlog->description = $validated['description'];
        $vlog->category = $validated['category'];
        $vlog->image = $imageFull_name;
        $vlog->status = $validated['status'];
        $vlog->save();

        return redirect()->route('vlog_manage')->with('success', 'Vlog saved successfully.');
    }

    public function vlog_manege(){
        $vlog = Vlog::orderBy('id','desc')->get();
        return view('vlog.manage_vlog',['vlogs' => $vlog]);
    }




}

