<!DOCTYPE html>
<html lang="en">
  <head>
    <title>kibegi store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      {{-- added  --}}
      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>


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
                    <form action="{{ route('delete.cart.product')}}" method="POST" enctype="multipart/form-data">
                        {!!  csrf_field() !!}
                        {{-- <input type="hidden" name="product_id" value="{{ $productId }}"> --}}
                        <input type="hidden" name="product_id" value="{{ $id }}">
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
                    {{-- <button class="btn btn-primary btn-lg btn-block order">Proceed To Order</button> --}}
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                        Proceed to order
                      </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>





  {{-- modal  --}}

  <div class="modal fade mt-4" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="card">
        <div class="modal-header mt-4">
          <h5 class="modal-title" id="exampleModalLabel">Payment method</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <div aria-hidden="true" class="icon icon-box-danger ">
              <span class="mdi mdi-close-box icon-item"></span>
          </div>
          </button>
        </div>
        <div class="modal-body">

            <div class="">
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

      </div>
    </div>
  </div>
  </div>












  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
  integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
  integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
  crossorigin="anonymous"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


  </body>
</html>
