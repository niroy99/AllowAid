@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/back1.jpeg" class="img-fluid" style="border:2px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2 style= "color:#FFA500 ;"><strong>Talk to us , We can help</strong></h2>
            <p style="font-size: 16px !important; "><br>When life comes to the hard part, it’s easy to feel overwhelmed, so  it’s good to know have someone to talk to. Whether it’s stress, anxiety, unexpected crisis, depression or sudden loss, AllowAid can help.<br>Speak with a licensed therapist from the privacy and comfort of your own home.<br> <strong>Don’t be alone, Let’s face it. AllowAid is here for you.</strong>
             <br>
            
            </p>
            <div class="mt-5">
               <a href="{{url('/register')}}"> <button class="btn btn-success">Sign up with us</button></a>
                <a href="{{url('/login')}}"><button class="btn btn-secondary">Login</button></a>
            </div>
        </div>
    </div>
    <hr>
    <!-- display how it works -->
    <div> <h3 style = "color:#fff"> <strong> How it Works </strong></h3></div>

<div class="card-deck">
    
    
  <div class="card"  style=" height: 13rem; background-color: #667685;>
    <img class="card-img-top" src="/banner/login.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style = "color:#FFA500"> <strong>Step1:</strong>  </h5>
      <p class="card-text" style ="font-size: 16px !important; word-spacing: normal;">Join us to see the available dates and therapist.</p>
      
    </div>
  </div>
  <div class="card"  style=" height: 13rem;background-color: #667685;>
    <img class="card-img-top" src="/banner/calender.jpg" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Step2:</strong>  </h5>
      <p class="card-text"style ="font-size: 16px !important;word-spacing: normal; ">Book a date and find your particular  therapist.</p>
      
    </div>
  </div>
  <div class="card"  style=" height: 13rem; background-color: #667685;>
    <img class="card-img-top" src="/banner/mobile.JPG" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Step3:</strong>  </h5>
      <p class="card-text"style ="font-size: 16px !important; word-spacing: normal;">Receive a confirmation mail about date and call.</p>
     
    </div>
  </div>
  <div class="card"  style=" height: 13rem;background-color: #667685;>
    <img class="card-img-top" src="/banner/happy.JPG" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Step4:</strong>  </h5>
      <p class="card-text" style ="font-size: 16px !important; word-spacing: normal; ">Start the therapy and begin the journey to be happier.</p>
      
    </div>
  </div>
</div>

<!-- end of card -->
<hr>
	<!-- search doctor -->
<form action="{{url('/')}}" method="GET">
    <div class="card" >
        <div class="card-body">
            <div class="card-header">Find Expert</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Find Expert</button>

                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</form>

    <!--display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="card-header"> Experts available </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse($doctors as $doctor)
                        <tr>	
                            <th scope="row">1</th>
                            <td>    
                                <img src="/doctors/doctor.png" width="100px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{$doctor->doctor->name}}
                            </td>
                            <td>
                                {{$doctor->doctor->department}}
                            </td>
                            <td>
                                <a href="{{route('create.appointment',[$doctor->user_id,$doctor->date])}}"><button class="btn btn-success">Book Appointment</button></a>
                            </td>
                        </tr>
                        @empty
                        <td>No Experts available today</td>
                        @endforelse


                    </tbody>
                </table>
                
            </div>
        </div>
        
    </div>

    <!-- display Benifit -->
    <div> <h3 style = "color:#FFA500"> <strong> Benifits of joining Allowaid</strong></h3></div>

<div class="card-deck">
    
    
  <div class="card"  style=" background-color: #879bad; width: 10rem;" >
    <img class="card-img-top" src="/banner/nomoney.JPEG" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" style = "color:#FFA500"> <strong>One:</strong>  </h5>
      <p class="card-text" style ="font-size: 14px !important; word-spacing: normal;">First of all allowaid is free.
      <br> Flexible plans to meet your needs and lifestyle. <br>
     </p>
      
    </div>
  </div>
  <div class="card"  style=" background-color: #879bad; width: 10rem;">
    <img class="card-img-top" src="/banner/booking1.JPG" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Two:</strong>  </h5>
      <p class="card-text"style ="font-size: 14px !important;word-spacing: normal; ">
      Eliminate commute time and scheduling hassle free. <br>
      Visit a therapist via secure phone or video using your computer or smartphone.<br>
    </p>
      
    </div>
  </div>
  <div class="card"  style=" background-color: #879bad; width: 10rem;">
    <img class="card-img-top" src="/banner/phone2.JPG" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Three:</strong>  </h5>
      <p class="card-text"style ="font-size: 14px !important; word-spacing: normal;">You don’t have to fight traffic or worry about fitting an appointment into your day. </p>
     
    </div>
  </div>
  <div class="card"  style="  background-color: #879bad; width: 10rem;">
    <img class="card-img-top" src="/banner/happy.JPG" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title" style = "color:#FFA500"> <strong>Four:</strong>  </h5>
      <p class="card-text" style ="font-size: 14px !important; word-spacing: normal; ">Be happy once again. </p>
      
    </div>
  </div>
</div>

<!-- end of card -->

</div>
<hr>

@include('admin.layouts.footer')

@endsection
