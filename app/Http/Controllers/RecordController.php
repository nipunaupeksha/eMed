<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    function show(){
        $data = array(
            'list'=>DB::table('record')->get()
        );
        $patientArr = array();
        foreach($data['list'] as $item){
           $patient = DB::table('patient')->where('id', $item->patientId)->first();
           $patientArr[$item->id] = $patient;
        }
        return view('record_view',compact('data', 'patientArr'));
    }
}
