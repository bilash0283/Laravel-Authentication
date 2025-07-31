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
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string|max:255',
        'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|in:0,1',
    ]);

    $imageFullName = '';
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/vlog_image'), $imageName);
        $imageFullName = 'images/vlog_image/' . $imageName;
    }

    $vlog = new Vlog();
    $vlog->name = $validated['name'];
    $vlog->description = $validated['description'];
    $vlog->category = $validated['category'];
    $vlog->image = $imageFullName;
    $vlog->status = $validated['status'];
    $vlog->save();

    return redirect()->route('vlog_manage')->with('success', 'Vlog Save Successful');

    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function vlog_manege(){
         $vlogs = Vlog::with('category')->orderBy('id', 'desc')->get();
        return view('vlog.manage_vlog', [
            'vlogs' => $vlogs
        ]);
    }


    public function vlog_edit($id)
    {
         $category = Category::where('status',1)->orderBy('id','desc')->get();
        $vlog = Vlog::find($id);
        return view('vlog.vlog_edit', [
            'vlog' => $vlog,
            'categoryes' => $category
        ]);
    }


    public function vlog_delete($id)
    {
        $vlog = Vlog::find($id);
        if(public_path($vlog->image)){
            $image_path = public_path($vlog->image);
            @unlink($image_path);
        }

        $vlog->delete();
        return redirect()->route('vlog_manage')->with('success','Vlog Delete Successfull');
    }


    public function vlog_update(Request $request , $id)
    {
        $vlog = Vlog::findOrFail($id);

        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'category' => 'required|string|max:255',
        'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        'status' => 'required|in:0,1',
    ]);

    if ($request->hasFile('image')) {

        if(public_path($vlog->image)){
            $image_path = public_path($vlog->image);
            @unlink($image_path);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/vlog_image'), $imageName);
        $imageFullName = 'images/vlog_image/' . $imageName;
        $vlog->image = $imageFullName;
    }

    
    $vlog->name = $validated['name'];
    $vlog->description = $validated['description'];
    $vlog->category = $validated['category'];
    $vlog->status = $validated['status'];
    $vlog->save();

    return redirect()->route('vlog_manage')->with('success', 'Vlog Update Successful');
    }

    public function single_vlog($id){
        $vlog = Vlog::findOrFail($id);
        return view('vlog.single_vlog',['vlog' => $vlog]);
    }


}





