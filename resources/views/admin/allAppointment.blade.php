@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
    <div class="d-flex justify-content-between">
        <div class="h4">All Appointment</div>
    </div>
    <table class="table text-center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Appointment Time</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allAppointment as $appointment)
            @php
                $user = App\Models\User::find($appointment['user_id']);
                $doctor_id=$appointment['doctor_id'];
                $doctor = App\Models\doctor::all()->where('id','=',$doctor_id);
            @endphp
            <tr>
                <th scope="row">{{$appointment['id']}}</th>
                <td>{{$doctor[0]['name']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$appointment['appointment_time']}}</td>
                <td>
                    <div>
                        <a class="fa-solid fa-user-pen me-2" href="editAppointment/{{$appointment['id']}}"></a>
{{--                        <a class="fa-solid fa-trash" onclick="deleteAppointment(this,{{$appointment['id']}})"></a>--}}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
