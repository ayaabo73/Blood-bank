<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    
     

</head>
<body>
   
    <div class="ALL">
        <div class="topbar">
            
           
        <form action="{{route('update',$donor->id)}}" method="post">

                @csrf
               
            <h4>يرجى تعبئة جميع الحقول المطلوبة</h4>

            
            <input type="varchar" name="name" value="{{$donor->name }}"/>&ensp;&ensp;
            <label>اسم المتبرع الكامل</label><br>
       
  <input type="int"  name="age"value="{{$donor->age}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label>العمر</label><br>

  <select  name="type" value="{{$donor->type}}">
  <option value="{{$donor->type}}">{{$donor->type}}</option>
    <option value="ذكر">ذكر</option>
    <option value="أنثى">أنثى</option>
  </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label for="gender">الجنس</label><br>
  
 <select  name="blood_type" value="{{$donor->blood_type}}">
 <option value="{{$donor->blood_type}}">{{$donor->blood_type}}</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="O+">O+</option>
    <option value="AB+">AB+</option>
    <option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="O-">O-</option>
    <option value="AB-">AB-</option>
  </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >فصيلة الدم</label><br>
  
  <input type="tel"  name="phone" value="{{$donor->phone}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >رقم الهاتف</label> <br>
  
  <input type="email"  name="email" value="{{$donor->email}}"/>&ensp;&ensp;
  <label >البريد الإلكتروني</label><br>

  <input type="text" name="location" value="{{$donor->location}}"/>&ensp;&ensp;&ensp;&ensp;
  <label > عنوان المتبرع</label><br>
  
  <input type="date"  name="date" value="{{$donor->date}}"/>&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >تاريخ التبرع</label>
  <br>
  
  <input type="double" name="amount" value="{{$donor->amount}}"/>&ensp;&ensp;
  <label >الكمية المتبرع بها</label><br><br>


  <button type="submit" name="add">حفظ</button> &ensp;&ensp;
  
</form>         
<form action="{{route('donor')}}" method=get style=" padding-right: 100px;margin-top:-43px;margin-right: 15px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;">
  <button type="submit" name="delet" style="margin-top: 90;">إلغاء</button> &ensp;&ensp;
  </form>  
   
 </div>
        </div>
        </div>  
        