<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kibegi store</title>


    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Mukta:300,400,700') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

    <div class="site-navbar bg-white py-2">


        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="{{ route('dashboard') }}" class="js-logo-clone">Kibegi-store</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ url('/admin') }}">Women Collection</a>

                  </li>

                  <li class=""><a href="#collection">Mens collection</a></li>
                  <li><a href="#">Shoes</a></li>

                  <li><a href="contact.html">Feedback</a></li>
                </ul>
              </nav>
            </div>
            <div class="icons">

                <a href="" class="cloth btn height-auto">Add item</a>
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
            </div>
          </div>
        </div>
      </div>


      <div class="container py-5">

        <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Available Women clothes</h2>
          </div>

<div class="col-md-12">

            <div class="site-blocks-table">

                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
                </div>
                  @endif

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price (each)</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-remove">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if($product->count()>0)
                    @foreach ($product as $prod)

                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="product-thumbnail">
                      <img src="{{ $prod->image }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                        {{ $prod->name }}
                    </td>
                    <td>TZS-{{ $prod->price }}/=</td>
                    <td>{{ $prod->quantity }}</td>
                    <td>
                        <a href="{{ route('admin.show', $prod->id) }}" class="btn btn-blue height-auto ">Details</a>
                        <a href="{{ route('admin.edit', $prod->id) }}" class="btn btn-secondary height-auto ">Edit</a>

                        <form action="{{ route('admin.destroy',$prod->id) }}" method="POST" type= "button" class="btn height-auto p-0" onsubmit="return confirm('Delete')">
                            @csrf
                            @method('DELETE')

                                                <button class="btn btn-primary height-auto ">Delete</button>
                                            </form>

                    </td>
                  </tr>

                  @endforeach
                  @else
                  <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif

                </tbody>
              </table>
            </div>
        </div>

      </div>


      <div class="container py-7">

        @yield('body')
      </div>


      <div class="overlay hidden"></div>


      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>

      <script src="js/main.js"></script>
      <script src="js/model.js"></script>
</body>
</html>
