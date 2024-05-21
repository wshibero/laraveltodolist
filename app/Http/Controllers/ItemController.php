<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    //
    public function view_all_data(){
        $items = DB::select('select * from items');
        return view('item_view',['items'=>$items]);
    }
    public function insertform(){
        return view('insert_form');
    }
    public function insert_data(Request $request){
        $activity = $request->input('activity');
        $description = $request->input('description');
        $complete = $request->input('complete');
        DB::insert('insert into items (activity,description,complete) values (?,?,?)',[$activity,$description,$complete]);
        return redirect('/all/items');
    }
}
