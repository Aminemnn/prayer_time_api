<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class novembercontroller extends Controller
{
    public function index(){
        $data = DB::table('november')->get();
        return response()->json($data);
    }
}
