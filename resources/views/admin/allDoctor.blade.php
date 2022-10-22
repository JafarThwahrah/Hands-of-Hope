@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
    <div class="w-100 d-flex gap-2">
        <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div class="card-body">
                <h5 class="card-title text-center">Doctor</h5>
                <p class="card-text text-center h4">{{count($allDoctors)}} Drs</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div class="card-body">
                <h5 class="card-title text-center">Approved Count</h5>
                <p class="card-text text-center h4">{{count($approved)}} Drs</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div class="card-body">
                <h5 class="card-title text-center">Pending Count</h5>
                <p class="card-text text-center h4">{{count($pending)}} Drs</p>
            </div>
        </div>
    </div>
    <div>
        <br>
   
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allDoctors as $doctors)
                <tr>
                    <th scope="row">{{$doctors['id']}}</th>
                    <td>Dr.{{$doctors['name']}}</td>
                    <td>{{$doctors['email']}}</td>
                    <td>{{$doctors['status']}}</td>
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" href="/admin/editDoctor/{{$doctors['id']}}"></a>
                            <a class="fa-solid fa-trash" onclick="deleteDoctor(this,{{$doctors['id']}})"></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
