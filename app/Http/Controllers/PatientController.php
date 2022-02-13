<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    function show(){
        $data = array(
            'list'=>DB::table('patient')->get()
        );
        $admitArr = array();
        $dischargeArr = array();
        foreach($data['list'] as $item){
           $admit = DB::table('admit')->where('patientId', $item->id)->latest('id')->first();
           $discharge = DB::table('discharge')->where('patientId', $item->id)->latest('id')->first();
           $admitArr[$item->id] = is_null($admit) ? 0:1;
           $dischargeArr[$item->id] = is_null($discharge) ? 0:1;
        }
        return view('patient_view',compact('data', 'admitArr', 'dischargeArr'));
    }

    function patient_add_view(){
        return view('patient_add');
    }

    function add(Request $request){
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'age'=>'required|numeric',
            'contact'=>'required'
        ]);

        $query = DB::table('patient')->insert([
            'fName'=>$request->input('firstName'),
            'lName'=>$request->input('lastName'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'age'=>$request->input('age'),
            'contact'=>$request->input('contact')
        ]);

        if($query){
            return back()->with('success','A new patient has been added.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('patient')->where('id',$id)->delete();
        return redirect('patient');
    }

    function edit($id){
        $row = DB::table('patient')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('patient_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'age'=>'required|numeric',
            'contact'=>'required'
        ]);

        $query = DB::table('patient')->where('id', $request->input('idt'))->update([
            'fName'=>$request->input('firstName'),
            'lName'=>$request->input('lastName'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'age'=>$request->input('age'),
            'contact'=>$request->input('contact')
        ]);

        if($query){
            return back()->with('success','A patient has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
