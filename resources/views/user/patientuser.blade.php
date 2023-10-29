<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/patient.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
 
    <div class="ALL">
        <div class="topbar">
            <nav>
                <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>
                <input type="search" placeholder="Search" aria-label="Search">
                <a class="btn btn-light" href="{{route('newpatientus')}}" role="button">طلب جديد</a>
             </ul>

                
               
            </nav>    
        </div>
        <div class="main">
         <div class="content">
         <nav>
         <ul>
         <br>
         <li><a href="{{route('user')}}">الرئيسية&ensp;<i class="fas fa-clinic-medical"></i></a></li><br><br><br>
                    <li><a href="#">الطلبات&ensp;<i class="fas fa-marker"></i></a></li><br><br><br>
                    <li><a href="{{route('point')}}">نقاطي&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="{{route('about')}}">حول&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
        <p><br> &ensp;&ensp;&ensp;{{ $name }}</i>&ensp;</p>  
      
        </div>
      
      
    <br>
        <form action="{{route('editpat',$emails->email)}}" method=get style=" padding-right: 250px; margin-top: -100px;font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;color:brown;">
  <button type="submit" name="edit" style="border-radius: 10px;background-color:   rgb(244, 239, 239);width:190px;height:60px;margin-top: 0px;margin-right: 15px;">تعديل الطلب</button> &ensp;&ensp;
  </form>  
  <form action="{{route('deletpat',$emails->email)}}" method=get style=" padding-right: 560px;margin-top: -61px;margin-right: 15px; font-size: 29px;text-decoration:right;text-align: right;font-family: cursive;color:brown;">
  <button type="submit" name="delet" style="border-radius: 10px;background-color:  rgb(244, 239, 239);width:190px;height:60px;margin-top: px"> حذف الطلب</button> &ensp;&ensp;
  </form>  

        </div>
        
        </div>   
    
    </body>
    </html>