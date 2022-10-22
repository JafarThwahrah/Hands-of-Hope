@extends('layout')

@section('style')


    <link rel="stylesheet" href="{{asset('style/profileStyle.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">



   
@endsection

@section('content')
    
@if(session('mssg'))
<div class="row justify-content-md-center py-3">

<h3 class="alert alert-success text-center col-md-4">{{session ('mssg')}}</h3>
</div>
@endif

<div class="container bootstrap snippets bootdey py-5">
<div class="row justify-content-md-center">
  
  <div class="profile-info col-md-11">
     
      <div class="panel border">
          <div class="bio-graph-heading" >
          </div>
          <div class="panel-body bio-graph-info" style="height: 27rem; padding-top:3rem">
              <h1>Bio Graph</h1>

     @foreach($User as $userinfo)

              <div class="row">
                <div class="biosection1 col-md-12">
                  <div class="bio-row">
                      <p><span>Name </span>: {{$userinfo->name}}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: Smith</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Country </span>: Australia</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday</span>: 13 July 1983</p>
                  </div>
                </div>

                <div class="biosection1 col-md-12">

                  <div class="bio-row">
                    <p><span>Mobile </span>: 0785631487</p>
                </div>
                  <div class="bio-row">
                      <p><span>Email </span>:  {{$userinfo->email}}</p>
                  </div>
                 
                  <ul class="nav nav-pills">
                    <li class=""><a class="btn btn-outline-info" href="{{route('editProfile' , $id)}}"> <i class="fa fa-edit"></i> Edit profile</a></li>
                    <li class="ms-4"><a class="btn btn-outline-danger" href="#" style="color: red"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
      
                </ul>

                </div>

            
              </div>
              @endforeach
          </div>
      </div>
    </div>


  </div>
<div class="row justify-content-md-center">
      <div class="col-lg-11">
        <div class="card mb-4">
          <div class="card-body">
            <h3>Appointment History</h3>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead class="">
                        <th><h5>Appointment Number</h5></th>
                        <th><h5>Date</h5></th>
                        <th><h5>Time</h5></th>
                        <th><h5>Doctor Name</h5></th>

                    </thead>
                    @foreach($appointments as $appointment)

                    <tbody>

                            <!-- Display Records -->
                            <tr class="">
                                <td class="">{{$appointment->id}}</td>
                                <td class="">{{$appointment->appointment_time}}</td>
                                <td class="">07:25AM</td>
                                <td class="">{{$appointment->name}}</td>



                            </tr>

                
                    </tbody>
                    @endforeach

                </table>
            </div>
          </div>
        </div>
    </div>

  </div>
  <div class="row justify-content-md-center">

    <div class="col-lg-11">
      <div class="card mb-4">
        <div class="card-body">
          <h3>Orders History</h3>
          <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                  <thead class="">
                      <th><h5>Order Number</h5></th>
                      <th><h5>Product Name</h5></th>
                      <th><h5>status</h5></th>
                      <th><h5>Date</h5></th>

                  </thead>
                  @foreach($orders as $order)

                  <tbody>

                          <!-- Display Records -->
                          <tr class="">
                              <td class="">{{$order->id}}</td>
                              <td class="">{{$order->name}}</td>
                              <td class="">{{$order->name}}</td>

                              {{-- <td class="">{{$order->status}}</td> --}}
                              <td class="">{{$order->created_at}}</td>



                          </tr>

              
                  </tbody>
                  @endforeach

              </table>
          </div>
        </div>
      </div>
  </div>

</div>
<ul class="nav nav-pills d-flex flex-row-reverse" style="margin-right: 5.5rem">
  <li class=""><a class="btn btn-outline-primary " href="{{route('testimonial' , $id)}}"> Tell us about your experiance</a></li>

</ul>

</div>

@endsection