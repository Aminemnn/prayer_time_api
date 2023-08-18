<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class octobercontroller extends Controller
{
    public function index(){
        $data = DB::table('october')->get();
        return response()->json($data);
    }
}
