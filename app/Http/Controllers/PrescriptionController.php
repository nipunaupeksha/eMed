<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    function show(){
        $data = array(
            'list'=>DB::table('prescription')->get()
        );
        return view('prescription_view',$data);
    }

    function prescription_add_view(){
        return view('prescription_add');
    }

    function add(Request $request){
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric'
        ]);

        $query = DB::table('prescription')->insert([
            'name'=>$request->input('name'),
            'type'=>$request->input('type'),
            'price'=>$request->input('price'),
            'quantity'=>$request->input('quantity')
        ]);

        if($query){
            return back()->with('success','A new prescription has been created.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('prescription')->where('id',$id)->delete();
        return redirect('prescription');
    }

    function edit($id){
        $row = DB::table('prescription')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('prescription_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric'
        ]);

        $query = DB::table('prescription')->where('id', $request->input('idt'))->update([
            'name'=>$request->input('name'),
            'type'=>$request->input('type'),
            'price'=>$request->input('price'),
            'quantity'=>$request->input('quantity')
        ]);

        if($query){
            return back()->with('success','A prescription has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
