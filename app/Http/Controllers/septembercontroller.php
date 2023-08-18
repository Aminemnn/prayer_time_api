<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class septembercontroller extends Controller
{
    public function index(){
        $data = DB::table('september')->get();
        return response()->json($data);
    }
}
