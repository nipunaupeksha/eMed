<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class DepartmentController extends Controller
{

    function show(){
        $data = array(
            'list'=>DB::table('department')->get()
        );
        return view('department_view',$data);
    }

    function department_add_view(){
        return view('department_add');
    }

    function add(Request $request){
        $request->validate([
            'departmentName'=>'required'
        ]);

        $query = DB::table('department')->insert([
            'name'=>$request->input('departmentName')
        ]);

        if($query){
            return back()->with('success','A new department has been added.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }

    function delete($id){
        $delete = DB::table('department')->where('id',$id)->delete();
        return redirect('department');
    }

    function edit($id){
        $row = DB::table('department')->where('id',$id)->first();
        $data = [
            'info'=>$row
        ];

        return view('department_update',$data);
    }

    function update(Request $request){
        $request->validate([
            'departmentName'=>'required'
        ]);

        $query = DB::table('department')->where('id', $request->input('idt'))->update([
            'name'=>$request->input('departmentName')
        ]);

        if($query){
            return back()->with('success','A department has been updated.');
        }else{
            return back()->with('fail','Something went wrong.');
        }
    }
}
