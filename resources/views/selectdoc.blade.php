@extends('layout')


@section('content')


<section class="cards">

    <div class="cardscontainer" id="CardsContainer">

        @foreach($doctors as $doctor)
        

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">{{$doctor->name}}</h3>
              <h5 class="card-title">{{$doctor->name}}</h5>

              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>



    </div>


</section>






@endsection