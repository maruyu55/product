<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item; //利用するモデルの読み込み

class DbController extends Controller
{
    public function index()
    {
        $data=[
            'records'=>Item::all()
        ];
        return view('db.index',$data);
    }
    public function search(Request $req){
        $item_name=$req->item_name;
        $data=[
            // 'records'=>Item::query()
            'records'=>Item::where('name','LIKE',"%{$item_name}%")->get()
        ];
        
        // $data=[
        //     'records'=>DB::select('select * from items where like ?')
        // ];
        // $data=DB::select('select * from items');
        return view('db.search',$data);
    }
}
