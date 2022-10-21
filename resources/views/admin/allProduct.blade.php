@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
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
