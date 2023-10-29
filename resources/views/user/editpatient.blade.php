
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/new_donor.css')}}">
    
     

</head>
<body>
   
    <div class="ALL">
        <div class="topbar">
            
        <form action="{{route('updatepat',$patient->email)}}" method="post" enctype="multipart/form-data">
                @csrf
               
            <h4>يرجى تعبئة جميع الحقول المطلوبة</h4>

            
            <input type="varchar" name="name" value="{{$patient->name}}"/>&ensp;&ensp;
            <label>اسم المريض الكامل</label><br>
            <input type="int"  name="age" value="{{$patient->age}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
           <label>العمر</label><br>

           <select  name="type" value="{{$patient->type}}">
            <option value="{{$patient->type}}">{{$patient->type}}</option>
    <option value="ذكر">ذكر</option>
    <option value="أنثى">أنثى</option>
  </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label for="gender">الجنس</label><br>
  
  <select  name="blood_type" value="{{$patient->blood_type}}">
  <option value="{{$patient->blood_type}}">{{$patient->blood_type}}</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
    <option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="O-">O-</option>
    <option value="AB-">AB-</option>
  </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >فصيلة الدم</label><br>
  
  <input type="tel"  name="phone" value="{{$patient->phone}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >رقم الهاتف</label> <br>

  <select   name="email" value="{{$patient->email}}">
  <option value="{{$patient->email}}">{{$patient->email}}</option>
  </select>&ensp;&ensp;&ensp;
  <label >البريد الإلكتروني</label><br>


  <input type="varchar" name="hospitalname" value="{{$patient->hospitalname}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;
  <label > اسم المستشفى</label><br>
  
  <input type="double"  name="amount" value="{{$patient->amount}}"/>&ensp;&ensp;
  <label >كمية الدم المطلوبة</label>
  <br><br><br>
  
  <button type="submit" name="add">حفظ</button> &ensp;&ensp;
  </form>
  <form action="{{route('patientuser')}}" method=get style=" padding-right: 100px;margin-top:-43px;margin-right: 15px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;">
  <button type="submit" name="delet" style="margin-top: 90;">إلغاء</button> &ensp;&ensp;
  </form>
   
 </div>
        </div>
        </div>  
        
      