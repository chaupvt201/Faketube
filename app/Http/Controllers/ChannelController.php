<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChannelController extends Controller
{
    public function index(Request $request){
        $channel = DB::table('channels')->get(); 
        return view('index', ['channel' =>$channel]);
    }
}
