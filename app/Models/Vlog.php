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
        $vlog = new Vlog;
        dd($request);
    }



}

