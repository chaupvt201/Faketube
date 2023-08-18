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
    public function addChannel(Request $request){
        DB::table('channels')->insert([
            'channelname'=> $request->channelname,
            'description' =>$request->description, 
            'Subscriberscount'=>$request->subscribers, 
            'url' => $request->url
        ]);
        return redirect()-> route('index'); 
}
public function show(Request $request){
    return view('create');
}
}
