@extends('layouts.appuserui')

@section('content')


<div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">
        <p>

</p>
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="{{route('loginui')}}" role="tab" aria-controls="pills-home" aria-selected="true">تسجيل دخول</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="{{route('signupui')}}" role="tab" aria-controls="pills-profile" aria-selected="false">تسجيل</a>
                </li>
               
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  
                  <div class="form px-4 pt-5">
                    <form action="{{route('logincon')}}" method="post">

                    <input type="text" name="email" class="form-control" placeholder="Email or Phone">
                    <p>

</p>

                    <input type="text" name="password" class="form-control" placeholder="Password">
                    <p>

</p>
                    <button class="btn btn-dark btn-block text-center ">اتمام</button>
                    </form>
                    
                    <p>

</p>
                  </div>



                </div>
               </div>
            
          
          

        </div>
        

      </div>
@endsection