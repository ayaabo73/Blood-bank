<?php

namespace App\Http\Controllers;

use App\Http\Requests\donor as RequestsDonor;
use App\Models\amount;
use App\Models\donor;
use App\Models\patient;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class DonorController extends Controller
{
    public function welcome()
    {

        $amounts=amount::all();
        $reports=report::count();
        $patients=patient::count();

       
        return view ('manager/manager',compact('amounts','reports','patients'));
    }
   

    public function newdonor()
    {


       
        return view ('manager/new_donor');
    }

    public function donor()
    {
       
       
        return view ('manager/donor');
    }

   public function store(RequestsDonor $request)
    {
    $donor= new donor();
    $donor->name=$request->name;
    $donor->age=$request->age;
    $donor->type=$request->type;
    $donor->blood_type=$request->blood_type;
    $donor->phone=$request->phone;
    $donor->email=$request->email;
    $donor->location=$request->location;
    $donor->date=$request->date;
    $donor->amount= $request->amount;
    $donor->points= $request->points;
    if($request->amount>'1.00')
    $donor->points += 20;
    if($request->amount=='1.00')
    $donor->points += 10;
    if($request->amount<'1.00')
    $donor->points += 5;
   
    $donor->save();
      
        $amount=amount::where('id',1)->first();
        $newamount=$request->input('amount');
        if($request->blood_type=='A+')
        $amount->A += $newamount;
        if($request->blood_type=='B+')
        $amount->B += $newamount;
        if($request->blood_type=='O+')
        $amount->O += $newamount;
        if($request->blood_type=='AB+')
        $amount->AB += $newamount;
        if($request->blood_type=='A-')
        $amount->Aa += $newamount;
        if($request->blood_type=='B-')
        $amount->Bb += $newamount;
        if($request->blood_type=='O-')
        $amount->Oo += $newamount;
        if($request->blood_type=='AB-')
        $amount->ABb += $newamount;
      
        $amount->save();
       
        return redirect()->route('donors');
    }
    public function donors()
    {
      $donors=donor::all();
     


        return view('manager/donors',compact('donors'));
    }
    public function edit( $id)
    {
        $donor=donor::findorfail($id);
        return view('manager/edit',compact('donor'));
    }
   
    public function update(Request $request,$id)
    {
        $donor=donor::findorfail($id);
        $donor->update([
            'name'=>$request->name,
            'age'=>$request->age,
            'type'=>$request->type,
            'blood_type'=>$request->blood_type,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'location'=>$request->location,
            'date'=>$request->date,
            'amount'=>$request->amount
        ]);
        return redirect()->route('donors');
    }
    public function delet(Request $request,$id){
    
       
     donor::findorfail($id)->delete();
        return redirect()->route('cleanupDonorTable');
    }
        public function cleanupDonorTable() {
            DB::statement("SET @count = 0;");
            DB::statement("UPDATE donors SET donors.id = @count:= @count + 1;");
            DB::statement("ALTER TABLE donors AUTO_INCREMENT = 1;");
            return redirect()->route('donors');
        }

        public function choose(Request $request){
            $request->validate([
                'name'=>'required','donortype'=>'required','email'=>'required'
            ]);
    
           if($request->donortype=='متبرع جديد')
                return redirect()->route('newdonor');
            
          if($request->donortype=='متبرع سابق') {
            $email = $request->input('email');
        return redirect()->route('editdonor',compact('email'));
                   
          }
         
        }
        
        public function editdonor(Request $request,$email)
    {
      
        
        $donor=donor::where('email',$email)->first();
        return view('manager/editdonor',compact('donor'));
    }
    public function updatedonor(Request $request,$email)
    {
        $donor=donor::where('email',$email)->first();
        
    $donor->name=$request->name;
    $donor->age=$request->age;
    $donor->type=$request->type;
    $donor->blood_type=$request->blood_type;
    $donor->phone=$request->phone;
    $donor->email=$request->email;
    $donor->location=$request->location;
    $donor->date=$request->date;
    $newamount= $request->amount;
    $donor->amount += $newamount;
     $donor->points= $request->points;
     if($request->amount>'1.00')
    $donor->points += 20;
    if($request->amount=='1.00')
    $donor->points += 10;
    if($request->amount<'1.00')
    $donor->points += 5;
    $donor->save();
    $amount=amount::where('id',1)->first();
    $newamount=$request->input('amount');
    if($request->blood_type=='A+')
    $amount->A += $newamount;
    if($request->blood_type=='B+')
    $amount->B += $newamount;
    if($request->blood_type=='O+')
    $amount->O += $newamount;
    if($request->blood_type=='AB+')
    $amount->AB += $newamount;
    if($request->blood_type=='A-')
    $amount->Aa += $newamount;
    if($request->blood_type=='B-')
    $amount->Bb += $newamount;
    if($request->blood_type=='O-')
    $amount->Oo += $newamount;
    if($request->blood_type=='AB-')
    $amount->ABb += $newamount;
  
    $amount->save();
       
        return redirect()->route('donors');
    }
}    
