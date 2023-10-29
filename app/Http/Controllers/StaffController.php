<?php

namespace App\Http\Controllers;

use App\Http\Requests\staff as RequestsStaff;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function staff()
    {

        $staffs=staff::all();
    
       
        return view ('manager/staff',compact('staffs'));
    }
    public function newstaff()
    {
       
       
        return view ('manager/new_staff');
    }

    public function stores(RequestsStaff $request)
    {
       staff::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('staff');
    }
    public function edits( $id)
    {
        $staff=staff::findorfail($id);
        return view('manager/editstaff',compact('staff'));
    }
   
    public function updates(Request $request,$id)
    {
        $staff=staff::findorfail($id);
        $staff->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('staff');
    }
    public function delets(Request $request,$id){
    
       
     staff::findorfail($id)->delete();
        return redirect()->route('cleanupDonorTables');
    }
        public function cleanupDonorTables() {
            DB::statement("SET @count = 0;");
            DB::statement("UPDATE staff SET staff.id = @count:= @count + 1;");
            DB::statement("ALTER TABLE staff AUTO_INCREMENT = 1;");
            return redirect()->route('staff');
        }













}
