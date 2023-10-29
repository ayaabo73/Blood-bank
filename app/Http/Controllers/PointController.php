<?php

namespace App\Http\Controllers;

use App\Http\Requests\patient as RequestsPatient;
use App\Models\donor;
use App\Models\patient;
use App\Models\point;
use App\Models\report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class PointController extends Controller
{
    public function user()
    {


       
        return view ('user/user');
    }
    public function point()
    {
        $points=point::all();
        $emails=auth()->user();
        $email=$emails->email;
        $donors=donor::where('email', $email)->first();
        if($donors==null){
        $point="0";}
      else{
        $donor=$donors->points;
        $point=$donor;
       }
      
       
        return view ('user/points',compact('points','point'));
    }
    public function patientuser()
    {
       $emails=auth()->user();
       $email=$emails->email;
       $reports=report::where('email',$email)->first();
       $patients=patient::where('email',$email)->first();
       if($patients=patient::where('email',$email)->first()==null)
       {
        $name=" اهلاً بك في موقعنا قم بتسجيل الطلب الخاص بك";
       }
     else {

       if($reports=report::where('email',$email)->first()==null){
       $name=" طلبك قيد المعالجة";}}

      if($reports=report::where('email',$email)->first()!=null){
       $name="تمت الموافقة على الطلب ";}
     
       
        return view ('user/patientuser',compact('emails','name'));
    }
    public function about()
    {


       
        return view ('user/aboutus');
    }
    public function newpatientus()
    {
        $emails=auth()->user();

       
        return view ('user/new_patient',compact('emails'));
    }
    public function storeuser(RequestsPatient $request)
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
        return redirect()->route('patientuser');
    }

    public function editpat( $email)
    {
       
        $patient=patient::where('email',$email)->first();
       
        return view('user/editpatient',compact('patient'));
    }
   
    public function updatepat(RequestsPatient $request,$email)
    {
        $patient=patient::where('email',$email)->first();
        $patient->update([
            'name'=>$request->name,
            'age'=>$request->age,
            'type'=>$request->type,
            'blood_type'=>$request->blood_type,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'hospitalname'=>$request->hospitalname,
            'amount'=>$request->amount
        ]);

        return redirect()->route('patientuser');
    }
    public function deletpat(Request $request,$email){
    
       
       patient::where('email',$email)->delete();
           return redirect()->route('cleanupDonorTablepat');
       }
           public function cleanupDonorTablepat() {
               DB::statement("SET @count = 0;");
               DB::statement("UPDATE patients SET patients.id = @count:= @count + 1;");
               DB::statement("ALTER TABLE patients AUTO_INCREMENT = 1;");
               return redirect()->route('patientuser');
           }
           public function remov(Request $request,$id)
           {   $emails=auth()->user();
            $email=$emails->email;
             $points=point::where('id',$id)->first();
             $point=$points->point;
             $donor=donor::where('email',$email)->first();
             if($donor->points >= $point){
            
             $donor=donor::where('email',$email)->first();

             $donor->name=$donor->name;
             $donor->age=$donor->age;
             $donor->type=$donor->type;
             $donor->blood_type=$donor->blood_type;
             $donor->phone=$donor->phone;
             $donor->email=$donor->email;
             $donor->location=$donor->location;
             $donor->date=$donor->date;
             $donor->amount= $donor->amount;
             $donor->points -= $point;
              $donor->save();
              return redirect()->route('point');}
               if($donor->points!=$point)
               echo "<SCRIPT LANGUAGE='JavaScript'>
               window.alert('عذراً ليس لديك عدد نقاط كافي')
               window.location.href='user/points.blade.php'
               </SCRIPT>";
       
             
           }

}