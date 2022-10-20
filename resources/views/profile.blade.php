@extends('layout')

@section('style')

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <link rel="stylesheet" href="{{asset('style/profileStyle.css')}}">
    <!-- Latest compiled and minified JavaScript -->
   
@endsection

@section('content')
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel border">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1>Camila Smith</h1>
              <p>deydey@theEmail.com</p>
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="w-100"><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
              <li class="w-100"><a href="#"> <i class="fa fa-edit"></i> Logout</a></li>

          </ul>
      </div>
  </div>
  <div class="profile-info  col-md-9">
     
      <div class="panel border pb-2">
          <div class="bio-graph-heading">
              Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Bio Graph</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>: Camila</p>
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
                  <div class="bio-row">
                      <p><span>Occupation </span>: UI Designer</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: jsmith@flatlab.com</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span>: (12) 03 4567890</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Phone </span>: 88 (02) 123456</p>
                  </div>
              </div>
          </div>
      </div>
    </div>


      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body">
            <h3>Appointment History</h3>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead class="">
                        <th>Appointment Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor Name</th>

                    </thead>

                    <tbody>

                            <!-- Display Records -->
                            <tr class="">
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>

                                
                                {{-- <td class="text-white"><button class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal"> Order Details</td></button> --}}



                            </tr>

                
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection