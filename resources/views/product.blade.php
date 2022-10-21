@extends('layout')

@section('content')
    

<!-- banner -->
<div class="heading-container heading-resize heading-button">
    <div class="heading-background heading-parallax bg-4" style="background-image:url()">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-wrap">
                        <div class="page-title">
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{{-- 
<div class="products-masonry-wrap" id="wrapProducts">

    <ul class="products masonry-products row masonry-wrap">

          
            <li class="product masonry-item col-md-3 col-sm-6">
                <div class="product-container">
                    <figure>
                        <div class="product-wrap">
                            <div class="product-images">
                                <div class="shop-loop-thumbnail">
                                    <img width="300px" height="350px" src="data:image/jpg;charset=utf8;base64,{{$product['image']}}" alt="Product" />
                                </div>
                            
                                <div class="clear"></div>
                                <div class="shop-loop-quickview">
                                    <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <div class="shop-loop-product-info">
                                <div class="info-title">
                                    <h3 class="product_title"><a href="./product_page.php?prod_id={{$product['id']}}">{{$product['name']}}</a></h3>
                                </div>
                                <div class="info-meta">
                                    <div class="info-price">
                                        <span class="price">
                                            <span class="amount">{{$product['desciption']}}</span>
                                        </span>
                                    </div>
                                    <div class="loop-add-to-cart">
                                        <a href="./order.php?ad={{$product['id']}}&from=shop">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </li>

      @endforeach

    </ul>
</div>
</div>
</div>
</div>

</div>
</div> --}}



<div class="cards d-flex" >

@foreach ($products as $product)
<div class="card m-5" style="width: 18rem;">
    <img src="data:image/jpg;charset=utf8;base64,{{$product['image']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product['name']}}</h5>
      <p class="card-text">{{$product['description']}}</p>
      <a href="order/{{$product['id']}}" class="btn btn-primary">Order Now</a>
    </div>
  </div>
  @endforeach

</div>














@endsection