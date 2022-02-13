<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\AdmitController;
use App\Http\Controllers\DischargeController;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('patient/admit/{id}',[AdmitController::class, 'show']);
Route::post('admit/add',[AdmitController::class,'add'])->name('admit/add');
Route::get('patient/discharge/{id}',[DischargeController::class, 'show']);
Route::post('discarge/add',[DischargeController::class,'add'])->name('discharge/add');

Route::get('patient',[PatientController::class, 'show']);
Route::get('patient/add',[PatientController::class,'patient_add_view']);
Route::post('patient/add',[PatientController::class,'add']);
Route::post('patient/update',[PatientController::class,'update'])->name('patient/update');
Route::get('patient/delete/{id}',[PatientController::class,'delete']);
Route::get('patient/edit/{id}', [PatientController::class,'edit']);

Route::get('department',[DepartmentController::class, 'show']);
Route::get('department/add',[DepartmentController::class,'department_add_view']);
Route::post('department/add',[DepartmentController::class,'add']);
Route::post('department/update',[DepartmentController::class,'update'])->name('department/update');
Route::get('department/delete/{id}',[DepartmentController::class,'delete']);
Route::get('department/edit/{id}', [DepartmentController::class,'edit']);

Route::get('doctor',[DoctorController::class, 'show']);
Route::get('doctor/add',[DoctorController::class,'doctor_add_view']);
Route::post('doctor/add',[DoctorController::class,'add']);
Route::post('doctor/update',[DoctorController::class,'update'])->name('doctor/update');
Route::get('doctor/delete/{id}',[DoctorController::class,'delete']);
Route::get('doctor/edit/{id}', [DoctorController::class,'edit']);

Route::get('prescription',[PrescriptionController::class, 'show']);
Route::get('prescription/add',[PrescriptionController::class,'prescription_add_view']);
Route::post('prescription/add',[PrescriptionController::class,'add']);
Route::post('prescription/update',[PrescriptionController::class,'update'])->name('prescription/update');
Route::get('prescription/delete/{id}',[PrescriptionController::class,'delete']);
Route::get('prescription/edit/{id}', [PrescriptionController::class,'edit']);

Route::get('room',[RoomController::class, 'show']);
Route::get('room/add',[RoomController::class,'room_add_view']);
Route::post('room/add',[RoomController::class,'add']);
Route::post('room/update',[RoomController::class,'update'])->name('room/update');
Route::get('room/delete/{id}',[RoomController::class,'delete']);
Route::get('room/edit/{id}', [RoomController::class,'edit']);

Route::get('receptionist',[ReceptionistController::class, 'show']);
Route::get('receptionist/add',[ReceptionistController::class,'receptionist_add_view']);
Route::post('receptionist/add',[ReceptionistController::class,'add']);
Route::post('receptionist/update',[ReceptionistController::class,'update'])->name('receptionist/update');
Route::get('receptionist/delete/{id}',[ReceptionistController::class,'delete']);
Route::get('receptionist/edit/{id}', [ReceptionistController::class,'edit']);

Route::get('record',[RecordController::class, 'show']);

