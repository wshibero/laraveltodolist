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
}
