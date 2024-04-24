<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admissions;

class AdminController extends Controller
{
    public function getData(){
        return view('admin.index')->with('admissions', Admissions::all());
    }
}
