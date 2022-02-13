<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receptionist;
use Illuminate\Support\Facades\DB;

class ReceptionistController extends Controller
{

    function show(){
        $data = array(
            'list'=>DB::table('receptionist')->get()
        );
        return view('receptionist_view',$data);
    }

    function receptionist_add_view(){
        return view('receptionist_add');
    }

    function add(Request $request){
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'age'=>'required|numeric'
        ]);

        $query = DB::table('receptionist')->insert([
            'name'=>$request->input('name'),
            'gender'=>$request->input('gender'),
            'age'=>$request->input('age')
        ]);

        if($query){
            return back()->with('success','A new receptionist has been added.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('receptionist')->where('id',$id)->delete();
        return redirect('receptionist');
    }

    function edit($id){
        $row = DB::table('receptionist')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('receptionist_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'age'=>'required|numeric'
        ]);

        $query = DB::table('receptionist')->where('id', $request->input('idt'))->update([
            'name'=>$request->input('name'),
            'gender'=>$request->input('gender'),
            'age'=>$request->input('age')
        ]);

        if($query){
            return back()->with('success','A receptionist has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
