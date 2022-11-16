<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tshirt;

class TshirtController extends Controller
{
    //
    public function add(Request $req){
        $newObj=new tshirt();
        $newObj->batchno=$req->batch;
        $newObj->quanity=$req->quantity;
        $newObj->status=$req->status;
        $newObj->remarks=$req->remarks;
        $newObj->save();
        return redirect('/');
    }
    public function index(){
        $data=tshirt::all();
        return view('welcome',[
            'list'=>$data
        ]);
    }
    public function delete($id){
        $data=tshirt::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id){
        $data=tshirt::find($id);
        return view('edit',[
            'list'=>$data
        ]);
    }
    public function updatedata(Request $req){
        $data=tshirt::find($req->id);
        $data->batchno=$req->batch;
        $data->quanity=$req->quantity;
        $data->status=$req->status;
        $data->remarks=$req->remarks;
        $data->save();
        return redirect('/');
    }
}
