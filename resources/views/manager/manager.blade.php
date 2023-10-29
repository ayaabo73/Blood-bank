<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/manager.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
 
    <div class="ALL">
        <div class="topbar">
            <nav>
                <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>
             <li> <button type="button" onclick="getElementById('logout-form').submit()"><b>تسجيل خروج</button> </li>
             </ul>

                
               
            </nav>    
        </div>
        <div class="main">
         <div class="content">
         <nav>
         <ul>
         <br>
              <li><a href="#">الرئيسية&ensp;<i class="fas fa-clinic-medical"></i></a></li><br><br><br>
                    <li><a href="{{route('donors')}}">المتبرعين&ensp;<i class="fas fa-burn"></i></a></li><br> <br><br>
                    <li><a href="{{route('patients')}}">الطلبات&ensp;<i class="fas fa-marker"></i></a></li><br><br><br>
                    <li><a href="{{route('reports')}}">التقارير&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="{{route('staff')}}">الكادر&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
        </div>
        @foreach ($amounts as $amount )
            
        @endforeach
        <div class="see">   
              
       <br><br><br><br>
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       A+={{$amount->A }}

        </div>
        <div class="see1">   
                
       <br><br><br><br>
      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      B+={{$amount->B }}


        </div>
        <div class="see2">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      O+={{$amount->O}}


        </div>
        <div class="see3">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      AB+={{$amount->AB }}


        </div>
        <div class="see4">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      A-={{$amount->Aa}}


        </div>
        <div class="see5">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      B-={{$amount->Bb}}


        </div>
        <div class="see6">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      O-={{$amount->Oo }}


        </div>
        <div class="see7">   
                
       <br><br><br><br>
       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
      AB-={{$amount->ABb }}


        </div>
        
            
        <div class="see8">   
          <br> &ensp;
        الطلبات المستلمة =
     
   
     
      {{$patients}}
      </div>
    
      
          
      <div class="see9">   
                <br>&ensp;
    الطلبات المسلمة =
      {{$reports}}

     </div>
     <form action="{{route('logout')}}" method="post" id="logout-form" >
                @csrf
              
  </form>

        </div>
        
    </div>   

</body>
</html>