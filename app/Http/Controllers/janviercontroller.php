<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class janviercontroller extends Controller
{
    public function index(){
        $data = DB::table('janvier')->get();
        return response()->json($data);
    }
}
