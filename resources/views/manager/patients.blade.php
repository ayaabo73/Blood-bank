<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BANK</title>
    

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/donors.css')}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>
<div class="ALL">
        <div class="topbar">
            <nav>
                <h1 class="logo">Blood<i class="fas fa-syringe"></i>Bank</h1>
                <ul>        
             <input type="search" placeholder="Search" aria-label="Search">
             <a class="btn btn-light" href="{{route('newpatient')}}" role="button">طلب جديد</a>

</nav>
        </div>
<div class="main">
         <div class="content">
         <nav>
         <ul>
         <br>
              <li><a href="{{route('welcome')}}">الرئيسية&ensp;<i class="fas fa-clinic-medical"></i></a></li><br><br><br>
                    <li><a href="{{route('donors')}}">المتبرعين&ensp;<i class="fas fa-burn"></i></a></li><br> <br><br>
                    <li><a href="#">الطلبات&ensp;<i class="fas fa-marker"></i></a></li><br><br><br>
                    <li><a href="{{route('reports')}}">التقارير&ensp;<i class="fas fa-paste"></i></a></li><br><br><br>
                    <li><a href="{{route('staff')}}">الكادر&ensp;<i class="fas fa-user-nurse"></i>&ensp;</a></li><br><br><br>
         
               
                </nav>  
         </div>
        </div>
        <div class="icons">
            <div class="social-icons">
            <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>حالة الطلب</th>
                <th>تاريخ الطلب</th>
                <th>كمية الدم المتوفر</th>
                <th>كمية الدم المطلوب</th>
                <th>الجنس</th>
                <th>فصيلة الدم</th>
                <th>اسم المريض</th>
                <th>الرقم التسلسلي</th>
            
            </tr>
        </thead>
           
        @foreach ($patients as $patient)
        @foreach ($amounts as $amount)
            <tr>
            <td><a class="btn btn-danger" href="{{route('deletp',$patient->id)}}" role="button">حذف</a>
            <a class="btn btn-danger" href="{{route('editR',$patient->id)}}" role="button">تأكيد</a> </td>
            <td>{{$patient->created_at}}</td>
            <td>@If($patient->blood_type=='A+'){{$amount->A}}@endif
            @If($patient->blood_type=='B+'){{$amount->B}}@endif
            @If($patient->blood_type=='O+'){{$amount->O}}@endif
            @If($patient->blood_type=='AB+'){{$amount->AB}}@endif
            @If($patient->blood_type=='A-'){{$amount->Aa}}@endif
            @If($patient->blood_type=='B-'){{$amount->Bb}}@endif
            @If($patient->blood_type=='O-'){{$amount->Oo}}@endif
            @If($patient->blood_type=='AB-'){{$amount->ABb}}@endif
        </td>
            <td>{{$patient->amount}} </td>
            <td> {{$patient->type}}</td>
            <td> {{$patient->blood_type}}</td>
            <td>{{$patient->name}} </td>
            <td>{{$patient->id }} </td>
            @endforeach 
            @endforeach 
      
</tr>
</div>
        </div>
    </div>   

</body>
</html>
  