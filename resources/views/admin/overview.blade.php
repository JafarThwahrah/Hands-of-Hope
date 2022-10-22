@extends('admin.index')

@section('content')
    <br>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade " id="allUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allUsers as $user)
                            <tr>
                                <th scope="row">{{$user['id']}}</th>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['role']}}</td>
                                <td>
                                    <div>
                                        <a class="fa-solid fa-user-pen me-2" href="editUser/{{$user['id']}}"></a>
                                        <a class="fa-solid fa-trash text-danger" onclick="deleteUser(this,{{$user['id']}})"></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="allDoctors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                        @foreach($allDoctors->take(5) as $doctors)
                            <tr>
                                <th scope="row">{{$doctors['id']}}</th>
                                <td>Dr.{{$doctors['name']}}</td>
                                <td>{{$doctors['email']}}</td>
                                <td>{{$doctors['status']}}</td>
                                <td>
                                    <div>
                                        <a class="fa-solid fa-user-pen me-2"></a>
                                        <a class="fa-solid fa-trash text-danger"
                                           onclick="deleteDoctor(this,{{$doctors['id']}})"></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="m-5 w-50">
        <div class="d-flex justify-content-between">
            <div class="h4">All Users</div>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#allUser">View All</a>
        </div>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allUsers->take(5) as $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['role']}}</td>
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" href="editUser/{{$user['id']}}"></a>
                            <a class="fa-solid fa-trash text-danger" onclick="deleteUser(this,{{$user['id']}})"></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>
        <div class="d-flex justify-content-between">
            <div class="h4">All Doctors</div>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#allDoctors">View All</a>
        </div>
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
            @foreach($allDoctors->take(5) as $doctors)
                <tr>
                    <th scope="row">{{$doctors['id']}}</th>
                    <td>Dr.{{$doctors['name']}}</td>
                    <td>{{$doctors['email']}}</td>
                    <td>{{$doctors['status']}}</td>
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" href="admin/editDoctor/{{$doctors['id']}}"></a>
                            <a class="fa-solid fa-trash text-danger" onclick="deleteDoctor(this,{{$doctors['id']}})"></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--        <br>--}}
        {{--        <div class="d-flex justify-content-between">--}}
        {{--            <div class="h4">All Product</div>--}}
        {{--            <a class="btn" href="">View All</a>--}}
        {{--        </div>--}}
        {{--        <table class="table">--}}
        {{--            <thead>--}}
        {{--            <tr>--}}
        {{--                <th scope="col">#</th>--}}
        {{--                <th scope="col">First</th>--}}
        {{--                <th scope="col">Last</th>--}}
        {{--                <th scope="col">Handle</th>--}}
        {{--            </tr>--}}
        {{--            </thead>--}}
        {{--            <tbody>--}}
        {{--            <tr>--}}
        {{--                <th scope="row">1</th>--}}
        {{--                <td>Mark</td>--}}
        {{--                <td>Otto</td>--}}
        {{--                <td>@mdo</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <th scope="row">2</th>--}}
        {{--                <td>Jacob</td>--}}
        {{--                <td>Thornton</td>--}}
        {{--                <td>@fat</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <th scope="row">3</th>--}}
        {{--                <td colspan="2">Larry the Bird</td>--}}
        {{--                <td>@twitter</td>--}}
        {{--            </tr>--}}
        {{--            </tbody>--}}
        {{--        </table>--}}

        <!-- Modal -->

    </div>

@endsection
