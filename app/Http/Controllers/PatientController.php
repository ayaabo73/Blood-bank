<?php

namespace App\Http\Controllers;

use App\Http\Requests\patient as RequestsPatient;
use App\Models\amount;
use App\Models\patient;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    public function newpatient()
    {


       
        return view ('manager/new_patient');
    }

    public function storep(RequestsPatient $request)
    {
        patient::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'type'=>$request->type,
            'blood_type'=>$request->blood_type,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'hospitalname'=>$request->hospitalname,
            'amount'=>$request->amount
        ]);

        return redirect()->route('patients');
    }
    public function patients()
    {
      $patients=patient::all();
      $amounts=amount::all();

        return view('manager/patients',compact('patients','amounts'));
    }

    public function deletp(Request $request,$id){
    
       
        patient::findorfail($id)->delete();
        return redirect()->route('cleanupDonorTablee');
    }
        public function cleanupDonorTablee() {
            DB::statement("SET @count = 0;");
            DB::statement("UPDATE patients SET patients.id = @count:= @count + 1;");
            DB::statement("ALTER TABLE patients AUTO_INCREMENT = 1;");
        return redirect()->route('patients');
        }
       
}
