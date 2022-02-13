<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    function show(){
        $data = array(
            'list'=>DB::table('room')->get()
        );
        return view('room_view',$data);
    }

    function room_add_view(){
        return view('room_add');
    }

    function add(Request $request){
        $request->validate([
            'category'=>'required',
            'status'=>'required'
        ]);

        $query = DB::table('room')->insert([
            'category'=>$request->input('category'),
            'status'=>$request->input('status')
        ]);

        if($query){
            return back()->with('success','A new room has been added.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('room')->where('id',$id)->delete();
        return redirect('room');
    }

    function edit($id){
        $row = DB::table('room')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('room_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'category'=>'required',
            'status'=>'required'
        ]);

        $query = DB::table('room')->where('id', $request->input('idt'))->update([
            'category'=>$request->input('category'),
            'status'=>$request->input('status')
        ]);

        if($query){
            return back()->with('success','A room has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}

