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
            <a href="{{ url('/') }}" class="js-logo-clone">Kibegi-store</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li>
                <a href="{{ url('/') }}">Home</a>
              </li>

              <li><a href="#footer">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="icons">

          <a href="{{ url('/cart') }}" class="icons-btn d-inline-block bag ">
            <span class="icon-shopping-bag"></span>
            <span class="number">{{ count((array) session('cart')) }}</span>
          </a>
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
        </div>
      </div>
    </div>
  </div>



    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ url('/cart') }}">Cart</a> </div>
          {{-- <a href="{{ url('shopping.cart') }}" class="icons-btn d-inline-block bag "> --}}
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{ asset($details['image'] )}} " alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                    {{ $details['name'] }}
                    </td>
                    <td> {{ $details['price'] }}/=</td>

                    {{-- <td><a href="#" class="btn btn-primary height-auto">X</a></td> --}}
                <td>
                    <form action="{{ route('delete.cart.product')}}" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="product_id" value="{{ $productId }}"> --}}
                        <button type="submit" class="btn btn-Primary height-auto">X</button>
                    </form>
                </td>
                  </tr>

                  @endforeach
                  @endif


                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">

              <div class="col-md-6">
                <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm btn-block" id="cont-shopping">Continue Shopping</a>
              </div>
            </div>

          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total Amount:</span>
                  </div>
                  <div class="col-md-6">
                    TZS -{{ session('totalPrice',0) }}/=
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block order">Proceed To Order</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>





    <div class="add_form order-form hidden" style="padding: 15px; border-radius: 5px;">

        <div style="display: flex; justify-content:center; color: black;">PAYMENTS</div>


            <div class="mb-3">
                <label for="name" class="form-label">PHONE NUMBER</label>
                <input type="text" class="form-control"  placeholder="+255 7552 37692" readonly>
            </div>

            <div class="mb-3">
            <label for="name" class="form-label">LIPA NUMBER</label>
            <input type="text" class="form-control"  placeholder="5377125 - MICHAEL B SANGA" readonly>
             </div>

              <div class="mb-3">
                <label for="price" class="form-label">TOTAL PRICE</label>
                <input type="text" class="form-control" name="price" value=" TZS -{{ session('totalPrice',0) }}/=" readonly>
              </div>

              <button class="btn btn-primary btn-lg btn-block confirm-order">Confirm order</button>


              </div>

<div class="overlay hidden"></div>


<script type="text/javascript">



const order = document.querySelector('.order');
const confirmOrder = document.querySelector('.order-form');
const overlay = document.querySelector('.overlay');

order.addEventListener('click',function(){
    confirmOrder.classList.remove('hidden');
    overlay.classList.remove( 'hidden' );
});

overlay.addEventListener('click',function(){
    confirmOrder.classList.add('hidden');
    overlay.classList.add('hidden');
});



</script>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


  </body>
</html>
