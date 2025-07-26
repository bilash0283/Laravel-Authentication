<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vlog extends Model
{
    public function create_vlog()
    {
        $category = Category::where('status',1)->get();
        return view('vlog.create',['categoryes' => $category]);
    }
}
