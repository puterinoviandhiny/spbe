<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class perkebController extends Controller
{
    public function index(){
        $file = File::orderBy('created_at','asc')->get();
        $file2 = File::orderBy('created_at','asc')->get();
        $file3 = File::orderBy('created_at','asc')->get();
        return view('frontend.perkeb.index',compact('file','file2','file3'));
    }
}
