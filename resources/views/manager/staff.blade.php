<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/staff.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="ALL">
        <div class="topbar">
            <nav>
            <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>        
             <input type="search" placeholder="Search" aria-label="Search">
             <a class="btn btn-light" href="{{route('newstaff')}}" role="button">كادر جديد</a>


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
                    <li><a href="{{route('reports')}}">التقارير&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="#">الكادر&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
            <div class="social-icons">
            <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>الحالة</th>
                <th>الوظيفة</th>
                <th>البريد الإلكتروني</th>
                <th>الاسم</th>
                <th>الرقم التسلسلي</th>
            
            </tr>
        </thead>
           
        @foreach ($staffs as $staff)
            <tr>
            <td><a class="btn btn-danger" href="{{route('delets',$staff->id)}}" role="button">حذف</a>&ensp;
            <a class="btn btn-danger" href="{{route('edits',$staff->id)}}" role="button">تعديل</a> </td>
            <td> {{$staff->type}}</td>
            <td> {{$staff->email}}</td>
            <td>{{$staff->name}} </td>
            <td>{{$staff->id }} </td>
            @endforeach 
      
</tr>
</div>
        </div>
    </div>   

</body>
</html>