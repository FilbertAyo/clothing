<!DOCTYPE html>
<html lang="en">
  <head>
    <title>kibegi store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Mukta:300,400,700') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>


  </head>
  <body>

  <div class="site-wrap">




<div class="site-navbar bg-white py-2">


    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="{{ url('/clothing') }}" class="js-logo-clone">Kibegi-store</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active">
                <a href="{{ url('/clothing') }}">Home</a>

              </li>

              <li><a href="#collection">Shop</a></li>
              <li><a href="#footer">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="icons">

          {{-- <a href="{{ route('shopping.cart') }}" class="icons-btn d-inline-block bag ">
            <span class="icon-shopping-bag"></span>
            <span class="number">{{ count((array) session('cart')) }}</span>
          </a> --}}
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
        </div>
      </div>
    </div>
  </div>


  <div class="site-blocks-cover" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto order-md-2 align-self-start">
          <div class="site-block-cover-content">
          <h2 class="sub-title">#New Summer Collection 2024</h2>
          <h1>Arrivals Sales</h1>
          <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
          </div>
        </div>
        <div class="col-md-6 order-1 align-self-end">
          <img src="images/model_3.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


  <div class="site-section" id= "collection">
    <div class="container">
      <div class="title-section mb-5">
        <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-8">
          <div class="product-item sm-height full-height bg-gray">
            <a href="#" class="product-category">Women <span>25 items</span></a>
            <img src="images/model_4.png" alt="Image" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-item sm-height bg-gray mb-4">
            <a href="#" class="product-category">Men <span>25 items</span></a>
            <img src="images/model_5.png" alt="Image" class="img-fluid">
          </div>

          <div class="product-item sm-height bg-gray">
            <a href="#" class="product-category">Shoes <span>25 items</span></a>
            <img src="images/model_6.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>







<div class="site-section" id="women">
    <div class="container">
      <div class="row">
        <div class="title-section mb-5 col-12">
          <h2 class="text-uppercase">Women clothes</h2>
        </div>
      </div>


@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

      <div class="row">

        @foreach ($products as $prod)
        <div class="col-lg-4 col-md-6 item-entry mb-4">
          <a href="#" class="product-item md-height bg-gray d-block">
            <img src="{{ $prod->image }}" alt="Image" class="img-fluid">
          </a>

          <div class="col-md-5" style="display: flex; float:right; margin:0;">
            <a href="{{ route('product.to.cart',$prod->id) }}" class="btn btn-outline-primary btn-block">Add to Cart</a>
          </div>

          <h2 class="item-title"><a href="#">{{ $prod->name }}</a></h2>
          <td class="item-price">TZS-{{ $prod->price }}/=</td>


        </div>
        @endforeach

      </div>

    </div>
  </div>

  <div class="site-section" id="women">
    <div class="container">
      <div class="row">
        <div class="title-section mb-5 col-12">
          <h2 class="text-uppercase">Contacts</h2>
        </div>
      </div>

  @include('layout.contacts')

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>
<script src="js/order.js"></script>

</body>
</html>
