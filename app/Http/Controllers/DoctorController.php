<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

    function show(){
        $data = array(
            'list'=>DB::table('doctor')->get()
        );
        return view('doctor_view',$data);
    }

    function doctor_add_view(){
        return view('doctor_add');
    }

    function add(Request $request){
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'specialization'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'contact'=>'required'
        ]);

        $query = DB::table('doctor')->insert([
            'name'=>$request->input('name'),
            'number'=>$request->input('number'),
            'specialization'=>$request->input('specialization'),
            'gender'=>$request->input('gender'),
            'address'=>$request->input('address'),
            'contactNumber'=>$request->input('contact')
        ]);

        if($query){
            return back()->with('success','A new doctor has been added.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('doctor')->where('id',$id)->delete();
        return redirect('doctor');
    }

    function edit($id){
        $row = DB::table('doctor')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('doctor_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'specialization'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'contact'=>'required'
        ]);

        $query = DB::table('doctor')->where('id', $request->input('idt'))->update([
            'name'=>$request->input('name'),
            'number'=>$request->input('number'),
            'specialization'=>$request->input('specialization'),
            'gender'=>$request->input('gender'),
            'address'=>$request->input('address'),
            'contactNumber'=>$request->input('contact')
        ]);

        if($query){
            return back()->with('success','A doctor has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
