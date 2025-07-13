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
        dd($request);
    }
}



