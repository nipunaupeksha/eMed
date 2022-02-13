<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admit;
use Illuminate\Support\Facades\DB;

class AdmitController extends Controller
{
    function show($id){
        $row = DB::table('patient')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];
        return view('admit_add', $data);
    }

    function add(Request $request){
        $request->validate([
            'admitDate'=>'required|date'
        ]);

        $value=DB::table('admit')->where('patientId', $request->id)->first();
        $value_exist = is_null($value)?0:1;
        if($value_exist==1){
            return back()->with('fail','Patient is already admitted');
        }

        $query = DB::table('admit')->insert([
            'patientId'=>$request->input('id'),
            'admitDate'=>$request->input('admitDate')
        ]);

        $query_clean = DB::table('discharge')->where('patientId',$request->input('id'))->delete();

        if($query){
            return back()->with('success','A patient has been admitted.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
