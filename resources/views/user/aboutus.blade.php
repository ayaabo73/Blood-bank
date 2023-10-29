<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/about.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
 
    <div class="ALL">
        <div class="topbar">
            <nav>
                <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>
                <input type="search" placeholder="Search" aria-label="Search">
    
             </ul>

                
               
            </nav>    
        </div>
        <div class="main">
         <div class="content">
         <nav>
         <ul>
         <br>
         <li><a href="user">الرئيسية&ensp;<i class="fas fa-clinic-medical"></i></a></li><br><br><br>
                    <li><a href="{{route('patientuser')}}">الطلبات&ensp;<i class="fas fa-marker"></i></a></li><br><br><br>
                    <li><a href="{{route('point')}}">نقاطي&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="#">حول&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
        
        <input type="varchar" name="name" style=" margin-left:499px; margin-top: 26px;  width:370px; height:36px;"/>
        &ensp;&ensp; &ensp;&ensp; &ensp;&ensp;<label>الاسم</label>
        <input type="varchar" name="name"style=" margin-left:500px; margin-top:30px;  width:370px; height:36px;"/>
         <label>البريد الإلكتروني</label>
        <input type="textarea" name="name"style=" margin-left:390px; margin-top: 30px;  width:500px; height:200px;"/>&ensp;&ensp;
        <label>ملاحظاتك</label>
        <form action="#" method=get style=" padding-right: -50px;margin-top:60px;margin-right:180px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;  border-radius: 20px;">
  <button type="submit" name="send" style="margin-top: 90; border-radius: 10px;">إرسال</button> &ensp;&ensp;
  </form>
        </div>
    
    </body>
    </html>