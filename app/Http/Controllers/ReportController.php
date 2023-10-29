<?php

namespace App\Http\Controllers;

use App\Models\amount;
use App\Models\patient;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function reports()
    {

        $reports=report::all();
       
        return view ('manager/reports',compact('reports'));
    }
    public function editR(Request $request,$id)
    {
        $request=patient::findorfail($id);
        report::create([
                'name'=>$request->name,
                'age'=>$request->age,
                'type'=>$request->type,
                'blood_type'=>$request->blood_type,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'hospitalname'=>$request->hospitalname,
                'amount'=>$request->amount
            ]);
            $amount=amount::where('id',1)->first();
        $newamount=$request->amount;
        if($request->blood_type=='A+')
        $amount->A -= $newamount;
        if($request->blood_type=='B+')
        $amount->B -= $newamount;
        if($request->blood_type=='O+')
        $amount->O -= $newamount;
        if($request->blood_type=='AB+')
        $amount->AB -= $newamount;
        if($request->blood_type=='A-')
        $amount->Aa -= $newamount;
        if($request->blood_type=='B-')
        $amount->Bb -= $newamount;
        if($request->blood_type=='O-')
        $amount->Oo -= $newamount;
        if($request->blood_type=='AB-')
        $amount->ABb -= $newamount;
        $amount->save();
            patient::findorfail($id)->delete();
        return redirect()->route('cleanupDonorTableee');
    }
       
    public function cleanupDonorTableee() {
            DB::statement("SET @count = 0;");
            DB::statement("UPDATE patients SET patients.id = @count:= @count + 1;");
            DB::statement("ALTER TABLE patients AUTO_INCREMENT = 1;");
        return redirect()->route('patients');
 }
     

 
   
}
