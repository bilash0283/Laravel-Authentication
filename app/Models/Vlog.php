<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vlog extends Model
{
    public function create_vlog()
    {
        return view('vlog.create');
    }
}
