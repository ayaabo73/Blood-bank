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
                    <li><a href="#">نقاطي&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="{{route('about')}}">حول&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">

        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;&ensp;&ensp;نقاطي
       
        &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
       
        {{$point}}
         <br>
            <table class="table table-striped table-hover" >
          
        <thead>
        
            <tr>
        
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                
                <th></th>
                <th></th>
                
                <th></th>
                <th></th>
                <th></th>
            </tr>
          
        </thead>
     
               
                @foreach ($points as $point)
             
            <tr>
            <td><a class="btn btn-danger" href="{{route('remov',$point->id)}}" role="button">استبدال</a></td>
           
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
            <td></td>
            <td> {{$point->point}}</td>
            <td>{{$point->name}} </td>
            <td>{{$point->id }} </td>
         
            @endforeach 
</tr>
</div>
        
     

</body>
</html>
  