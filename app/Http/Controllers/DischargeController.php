<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discharge;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DischargeController extends Controller
{
    function show($id){
        $row = DB::table('patient')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];
        return view('discharge_add', $data);
    }

    function add(Request $request){
        $request->validate([
            'dischargeDate'=>'required|date',
            'description'=>'required'
        ]);

        $value=DB::table('discharge')->where('patientId', $request->id)->first();
        $value_exist = is_null($value)?0:1;
        
        if($value_exist==1){
            return back()->with('fail','Patient is already discharged');
        }

        $admitDetails = DB::table('admit')->where('patientId',$request->input('id'))->first();
        $interval = Carbon::createFromDate($request->dischargeDate)->diffInDays(Carbon::createFromDate($admitDetails->admitDate), false);
        if($interval>0){
            return back()->with('fail','Discharge date is wrong');
        }

        $query = DB::table('discharge')->insert([
            'patientId'=>$request->input('id'),
            'dischargeDate'=>$request->input('dischargeDate')
        ]);

        $queryRecords = DB::table('record')->insert([
            'patientId'=>$request->input('id'),
            'admitDate'=>$admitDetails->admitDate,
            'dischargeDate'=>$request->input('dischargeDate'),
            'description'=>$request->input('description')
        ]);

        $query_clean = DB::table('admit')->where('patientId',$request->input('id'))->delete();

        if($query){
            return back()->with('success','A patient has been discharged.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
