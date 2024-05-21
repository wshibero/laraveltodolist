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
        return view('pages.item_view',['items'=>$items]);
    }
    public function insertform(){
        return view('pages.insert_form');
    }
    public function insert_data(Request $request){
        $activity = $request->input('activity');
        $description = $request->input('description');
        $complete = $request->input('complete');
        DB::insert('insert into items (activity,description,complete) values (?,?,?)',[$activity,$description,$complete]);
        return redirect('/all/items');
    }
    public function update_data_form($id){
        $item = DB::table('items')->where('id',$id)->first();
        return view('pages.update_form',['item'=>$item]);
    }
    public function update_data(Request $request, $id){
        $activity = $request->input('activity');
        $description = $request->input('description');
        DB::update('update items set activity=?,description=? where id=?',[$activity,$description,$id]);
        return redirect('/all/items');
    }
    public function completed_task($id){
        $complete = "complete";
        DB::update('update items set complete=? where id=?',[$complete, $id]);
        return redirect('/all/items');
    }
    public function delete_record($id){
        DB::delete('delete from items where id=?',[$id]);
        return redirect('/all/items');
    }
}
