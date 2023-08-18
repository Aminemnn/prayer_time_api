<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class decembrecontroller extends Controller
{
    public function index(){
        $data = DB::table('december')->get();
        return response()->json($data);
    }
}
