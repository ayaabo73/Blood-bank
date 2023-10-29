<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/reports.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="ALL">
        <div class="topbar">
            <nav>
                <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>        
             <input type="search" placeholder="Search" aria-label="Search">

</nav>
        </div>
<div class="main">
         <div class="content">
         <nav>
         <ul>
         <br>
              <li><a href="{{route('welcome')}}">الرئيسية&ensp;<i class="fas fa-clinic-medical"></i></a></li><br><br><br>
                    <li><a href="{{route('donors')}}">المتبرعين&ensp;<i class="fas fa-burn"></i></a></li><br> <br><br>
                    <li><a href="{{route('patients')}}">الطلبات&ensp;<i class="fas fa-marker"></i></a></li><br><br><br>
                    <li><a href="#">التقارير&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="{{route('staff')}}">الكادر&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
            <div class="social-icons">
            <table class="table table-striped table-hover">
        <thead>
            <tr>
           <th>تاريخ تأكيد الطلب</th>
                <th>كمية الدم المطلوب</th>
                <th>الجنس</th>
                <th>فصيلة الدم</th>
                <th>اسم المريض</th>
                <th>الرقم التسلسلي</th>
            
            </tr>
        </thead>
           
        @foreach ($reports as $report)
            <tr>
            <td>{{$report->created_at}}</td>
            <td>{{$report->amount}} </td>
            <td> {{$report->type}}</td>
            <td> {{$report->blood_type}}</td>
            <td>{{$report->name}} </td>
            <td>{{$report->id }} </td>
            @endforeach 
      
</tr>
</div>
        </div>
    </div>   

</body>
</html>
  