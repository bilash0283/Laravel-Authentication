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
        // ✅ Step 1: Validate request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string|max:255',
        'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|in:0,1',
    ]);

    // ✅ Step 2: Handle image upload (if any)
    $imageFullName = '';
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/vlog_image'), $imageName);
        $imageFullName = 'images/vlog_image/' . $imageName;
    }

    // ✅ Step 3: Save data to database
    $vlog = new Vlog();
    $vlog->name = $validated['name'];
    $vlog->description = $validated['description'];
    $vlog->category = $validated['category'];
    $vlog->image = $imageFullName;
    $vlog->status = $validated['status'];
    $vlog->save();

    // ✅ Step 4: Redirect with success message
    return redirect()->route('vlog_manage')->with('success', 'Vlog Save Successful');

    }

    public function vlog_manege(){
        $vlog = Vlog::orderBy('id','desc')->get();
        return view('vlog.manage_vlog',['vlogs' => $vlog]);
    }

    public function vlog_edit($id)
    {
        echo $id;
        echo "vlog Edit page ";
    }

    public function vlog_delete()
    {

    }



}

