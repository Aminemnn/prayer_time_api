<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class juincontroller extends Controller
{
    public function index(){
        $data = DB::table('juin')->get();
        return response()->json($data);
    }
}
