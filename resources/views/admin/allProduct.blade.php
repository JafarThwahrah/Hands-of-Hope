@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
<div class="d-flex justify-content-between">
    <div class="h4">All Products</div>
</div>
<table class="table text-center table-hover ">
    <thead style="color:#1D2A4D; ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody style="color:#354F8E">
    @foreach($allProduct as $product)
        <tr>
            <th scope="row">{{$product['id']}}</th>
            <td>{{$product['name']}}</td>
            <td><img src="data:image/png;base64,{{$product['image']}}" alt="" style="width: 50px"> </td>
            <td>{{$product['description']}}</td>
            <td>
                <div>
                    <a class="fa-solid fa-user-pen me-2" style="color:green"   href="editProduct/{{$product['id']}}"></a>
                    <a class="fa-solid fa-trash"  style="color: red"  onclick="deleteProduct(this,{{$product['id']}})"></a>
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
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product image</label>
                <input type="file" class="form-control" id="name" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
