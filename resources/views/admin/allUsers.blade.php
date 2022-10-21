@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
    <div class="m-5">
        <div class="d-flex justify-content-between">
            <div class="h4">All Users</div>
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
            @foreach($allUsers as $user)
                <tr>
                    <th scope="row">{{$user['id']}}</th>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['role']}}</td>
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" href="editUser/{{$user['id']}}"></a>
                            <a class="fa-solid fa-trash" onclick="deleteUser(this,{{$user['id']}})"></a>
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
