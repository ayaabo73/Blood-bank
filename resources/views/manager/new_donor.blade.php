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
            
           
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
               
            <h4>يرجى تعبئة جميع الحقول المطلوبة</h4>

            
            <input type="varchar" name="name"/>&ensp;&ensp;
            <label>اسم المتبرع الكامل</label><br>
       
  <input type="int"  name="age"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label>العمر</label>&ensp;<br>

  <select  name="type">
    <option value="ذكر">ذكر</option>
    <option value="أنثى">أنثى</option>
  </select>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label for="gender">الجنس</label><br>
  
 <select  name="blood_type">
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
  
  <input type="tel"  name="phone"/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >رقم الهاتف</label> <br>
  
  <input type="email"  name="email"/>&ensp;&ensp;
  <label >البريد الإلكتروني</label><br>

  <input type="text" name="location"/>&ensp;&ensp;&ensp;&ensp;
  <label > عنوان المتبرع</label><br>
  
  <input type="date"  name="date"/>&ensp;&ensp;&ensp;&ensp;&ensp;
  <label >تاريخ التبرع</label>
  <br>
  
  <input type="double" name="amount"/>&ensp;&ensp;
  <label >الكمية المتبرع بها</label><br><br>
  <input type="hidden" name="points" value="0">


  
  <button type="submit" name="add">حفظ</button> &ensp;&ensp;
  </form>
  <form action="{{route('donors')}}" method=get style=" padding-right: 100px;margin-top:-43px;margin-right: 15px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;">
  <button type="submit" name="delet" style="margin-top: 90;">إلغاء</button> &ensp;&ensp;
  </form>
   
 </div>
        </div>
        </div>  
        