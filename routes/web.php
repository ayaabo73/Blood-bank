<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use App\Models\staff;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
 Route::controller(DonorController::class)->group(function(){
 Route::get('welcome','welcome')->name('welcome');
 Route::get('newdonor','newdonor')->name('newdonor');
 Route::post('store','store')->name('store');
 Route::get('donors','donors')->name('donors');
 Route::get('donor','donor')->name('donor');
 Route::get('edit/{id}','edit')->name('edit');
 Route::post('update/{id}','update')->name('update');
 Route::get('delet/{id}','delet')->name('delet');
 Route::get('cleanupDonorTable','cleanupDonorTable')->name('cleanupDonorTable');
 Route::get('editdonor/{email}','editdonor')->name('editdonor');
 Route::post('updatedonor/{email}','updatedonor')->name('updatedonor');
 Route::post('choose','choose')->name('choose');

    });

 Route::controller(PatientController::class)->group(function(){
    Route::get('patients','patients')->name('patients');
    Route::get('newpatient','newpatient')->name('newpatient');
    Route::post('storep','storep')->name('storep');
    Route::get('deletp/{id}','deletp')->name('deletp');
    Route::get('cleanupDonorTablee','cleanupDonorTablee')->name('cleanupDonorTablee');
 });



 Route::controller(ReportController::class)->group(function(){
     Route::get('reports','reports')->name('reports');
     Route::get('editR/{id}','editR')->name('editR');
     Route::get('updateR/{reports}','updateR')->name('updateR');
     Route::get('cleanupDonorTableee','cleanupDonorTableee')->name('cleanupDonorTableee');
 });


Route::controller(StaffController::class)->group(function(){
    Route::get('staff','staff')->name('staff');
    Route::get('newstaff','newstaff')->name('newstaff');
    Route::get('edits/{id}','edits')->name('edits');
    Route::post('updates/{id}','updates')->name('updates');
    Route::get('delets/{id}','delets')->name('delets');
    Route::post('stores','stores')->name('stores');
    Route::get('cleanupDonorTables','cleanupDonorTables')->name('cleanupDonorTables');
 });
 Route::controller(PointController::class)->group(function(){

    Route::get('user','user')->name('user');
    Route::get('point','point')->name('point');
    Route::get('patientuser','patientuser')->name('patientuser');
    Route::get('about','about')->name('about');
    Route::post('storeuser','storeuser')->name('storeuser');
    Route::get('newpatientus','newpatientus')->name('newpatientus');
    Route::get('editpat/{email}','editpat')->name('editpat');
    Route::post('updatepat/{email}','updatepat')->name('updatepat');
    Route::get('deletpat/{email}','deletpat')->name('deletpat');
    Route::get('cleanupDonorTablepat','cleanupDonorTablepat')->name('cleanupDonorTablepat');
    Route::get('remov/{id}','remov')->name('remov');
   
});
Route::get('/redirecting',function(){

if(auth('staff')->check()){
    return  redirect()->route('welcome');
}
else{ 
 return  redirect()->route('user');

}
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
