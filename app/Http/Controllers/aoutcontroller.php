<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aoutcontroller extends Controller
{
    public function index(){
        $data = DB::table('aout')->get();
        return response()->json($data);
    }}
