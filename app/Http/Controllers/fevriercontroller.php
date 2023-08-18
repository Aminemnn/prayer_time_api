<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fevriercontroller extends Controller
{
    public function index(){
        $data = DB::table('fevrier')->get();
        return response()->json($data);
    }
}
