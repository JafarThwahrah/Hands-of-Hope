@extends('layout')
@section('content')


<html lang="en"><head>
    <meta charset="UTF-8">
    <title>Funraise Donation Page Examples</title>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css"> --}}

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{asset('style/donation.css')}}">


  </head>

  <body style="height: initial; overflow: initial; position: initial;">


    <div class="fade-in">


<div class="container-lg mt-5 mb-5">
  <div class="pt-5"></div>
  <div class="row">
    <div class="col-12 col-lg-5 mt-5 pt-3">
      <h1>Your contribution impacts our community</h1>
      <p>we are so Glad for your support
      </p>
      <div class="d-flex justify-content-between mt-5">
        <button class="funButton rowButton25" data-toggle="modal" data-target="#exampleModal" type="button"><i data-formid="271" data-frequency="m" class="material-icons align-middle">favorite</i>Donate</button>

      </div>
      <br> <br>
      <section>
          <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-3" style="font-size: 30px">Over All Total
              Donations
          </h5>
          <h5 class="  text-uppercase  border-5"style="font-size: 30px"> <span> ${{ $sum }} </span></h5>
      </section>
      <br><br>
      <div class="row">

        <section>
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="font-size: 30px">Last Donations
            </h5>
        </section>
        <table class="table  table-bordered border-info ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Donated at</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($show as $item)
                        @php
                            $i++;
                        @endphp
                        <th scope="row ">{{ $i }}</th>
                        <td>{{ $item->donationAmount }}</td>
                        <td>{{ $item->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>




    </div>
    </div>
    <div class="col-12 col-lg-6 offset-lg-1">
      <img src="{{ asset('img\10f76293-0891-4022-9f96-e7a815429d67.jpg') }}" style="width: 100%; border-radius: 4px;">
      {{-- <img src="https://images.pexels.com/photos/6348119/pexels-photo-6348119.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width: 100%; border-radius: 4px;"> --}}
    </div>
  </div>
</div>


   </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Donation Details</h5>
            <button type="button" id="closeModel" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="box-2">
                <div class="box-inner-2">
                    <div>
                        <h2 class="fw-bold">You're making a difference. </h2>
                    </div>
                    {{-- @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif --}}
                    <form action="/donationForm" method="post">
                        @csrf

                        <div class="mb-3">
                            <p class="dis fw-bold mb-2">Email address</p>
                            @if ($errors->has('emailDon'))
                                <span class="text-danger">{{ $errors->first('emailDon') }}</span>
                            @endif

                            <input class="form-control" name="emailDon" type="email"
                                placeholder="name@email.com">
                        </div>
                        <p class="dis fw-bold mb-1">Card details</p>
                        @if ($errors->has('cardNo') || $errors->has('expirationDate') || $errors->has('securityCode'))
                            <span class="text-danger">{{ $errors->first('cardNo') }}</span> <br>
                            <span class="text-danger">{{ $errors->first('expirationDate') }}</span> <br>
                            <span class="text-danger">{{ $errors->first('securityCode') }}</span>
                        @endif
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa p-2"></div>

                            <input type="text" name="cardNo" class="form-control"
                                placeholder="Card Details">
                            <div class="d-flex w-75">

                                <input type="date" name="expirationDate" class="form-control m-1"
                                    placeholder="MM/YY">

                                <input type="password" name="securityCode" maxlength=3 class="form-control m-1"
                                    placeholder="CVV">
                            </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Cardholder name</p>
                            @if ($errors->has('cardholderName'))
                                <span class="text-danger">{{ $errors->first('cardholderName') }}</span>
                            @endif
                            <input class="form-control" name="cardholderName" type="text">
                        </div>
                        <div class="my-3 address">
                            <p class="dis fw-bold mb-3">Billing address</p>
                            @if ($errors->has('billingAddress'))
                                <span class="text-danger">{{ $errors->first('billingAddress') }}</span>
                            @endif
                            <input class="form-control" name="billingAddress" type="text">
                        </div>
                        <div class="my-3 address">

                            @if ($errors->has('zip'))
                                <span class="text-danger">{{ $errors->first('zip') }}</span>
                            @endif
                            <p class="dis fw-bold mb-3">Zip</p>
                            <input class="form-control zip" name="zip" type="text" placeholder="ZIP">
                        </div>


                        <div class=" my-3">
                            <p class="dis fw-bold mb-2">Donation Amount</p>
                            <div class="inputWithcheck">
                                @if ($errors->has('donationAmount'))
                                    <span class="text-danger">{{ $errors->first('donationAmount') }}</span>
                                @endif
                                <input class="form-control"name="donationAmount" type="text"
                                    value="0" placeholder="JD">

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>

        </div>
        <div class="modal-footer">

        </div>
    </div>

</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



{{-- <script src="{{asset('js/test.js')}}"></script> --}}





</html>
@endsection
