<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/newstaff.css')}}">
    
     

</head>
<body>
   
    <div class="ALL">
        <div class="topbar">
            
           
        <form action="{{route('stores')}}" method="post" >
                @csrf
               

            <br>
            <label>الاسم الكامل</label><br>
            <input type="varchar" name="name"style="width:400px;height:40px;border-color: #mintcream;;background-color:#fdfdfd;border-radius:10px;
             box-shadow: 0 0 5px  rgba(0,0,0,0.6);"/><br>
          
          <label >البريد الإلكتروني</label><br>
            <input type="email"  name="email"style="width:400px;height:40px;border-color: #mintcream;;background-color:#fdfdfd;border-radius:10px;
             box-shadow: 0 0 5px  rgba(0,0,0,0.6);"/>
             <label>الوظيفة</label><br>
            <input type="varchar"  name="type"style="width:400px;height:40px;border-color: #mintcream;;background-color:#fdfdfd;border-radius:10px;
             box-shadow: 0 0 5px  rgba(0,0,0,0.6);"/><br>
             <label >كلمة السر</label><br>
            <input type="hashing"  name="password"style="width:400px;height:40px;border-color: #mintcream;;background-color:#fdfdfd;border-radius:10px;
             box-shadow: 0 0 5px  rgba(0,0,0,0.6);"/>
      <br><br>
            <button type="submit" name="next">التالي</button>&ensp;&ensp;&ensp;&ensp;&ensp;
</form>           
<form action="{{route('staff')}}" method=get style=" padding-right: 200px;margin-top:-55px;margin-right: 15px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;">
  <button type="submit" name="delet" style="margin-top: 90;">إلغاء</button> &ensp;&ensp;
  </form>
 </div>
        </div>
        </div>  
        