<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class juilletcontroller extends Controller
{
    public function index(){
        $data = DB::table('juillet')->get();
        return response()->json($data);
    }
}
