@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
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
    <div class="container w-75">
        <h4>Add Product</h4>
        <form action="/admin/addProduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="name" name="description" value="">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product image</label>
                <input type="file" class="form-control" id="name" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
