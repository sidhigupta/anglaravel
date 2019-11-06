<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

public function getData()
    {
         $domains = DB::table('emplyee')
        ->select('*')
        ->get(); // you were missing the get method
        return response()->json($domains);
    }

}
