@extends('admin.index')
{{--box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
@section('content')
<div class="w-100 d-flex gap-2">
    <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="card-body">
            <h5 class="card-title text-center">Order</h5>
            <p class="card-text text-center h4">{{count($allOrders)}} Orders</p>
        </div>
    </div>
    <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="card-body">
            <h5 class="card-title text-center">Approved Count</h5>
            <p class="card-text text-center h4">{{count($approved)}} Orders</p>
        </div>
    </div>
    <div class="card" style="width: 18rem; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="card-body">
            <h5 class="card-title text-center">Pending Count</h5>
            <p class="card-text text-center h4">{{count($pending)}} Orders</p>
        </div>
    </div>
</div>
<div>
    <br>

        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">user_id</th>
                <th scope="col">product_id</th>
                <th scope="col">national</th>
                <th scope="col">phone</th>
                <th scope="col">address</th>
                <th scope="col">city</th>
                <th scope="col">status</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($allOrders as $order)
                <tr>
                    <th scope="row">{{$order['id']}}</th>
                    <td>{{$order['user_id']}}</td>
                    <td>{{$order['product_id']}}</td>
                    <td>{{$order['national']}}</td>
                    <td>{{$order['phone']}}</td>
                    <td>{{$order['address']}}</td>
                    <td>{{$order['city']}}</td>
                    <td>{{$order['status']}}</td>                
                    <td>
                        <div>
                            <a class="fa-solid fa-user-pen me-2" href="editOrder/{{$order['id']}}"></a>
                            <a class="fa-solid fa-trash" onclick="deleteOrder(this,{{$order['id']}})"></a>
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
