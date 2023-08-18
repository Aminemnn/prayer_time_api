<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class marscontroller extends Controller
{
    public function index(){
        $data = DB::table('mars')->get();
        return response()->json($data);
    }
}
