
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
                <a href="index.html" class="js-logo-clone">Kibegi-store</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ url('/admin') }}">Women Collection</a>

                  </li>


                  <li><a href="{{ url('/shoes') }}">Shoes</a></li>

                  <li><a href="">Feedback</a></li>
                </ul>
              </nav>
            </div>

          </div>
        </div>
      </div>



<div class="add_form">



        <div style="display: flex; justify-content:center; color: black;">SHOES DETAILS</div>



        <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <img  class="form-control" name="s_image" placeholder="image" src="{{ asset($shoes->s_image)}}" style=" height: auto;" readonly>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input type="text" class="form-control" name="s_name" placeholder="product_name" value="{{ $shoes->s_name }}" readonly>
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price (each Shoe)</label>
                <input type="text" class="form-control" name="s_price" placeholder="Price" value="{{ $shoes->s_price }}" readonly>
              </div>

              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text"  class="form-control" name="s_quantity" placeholder="Quantity" value="{{ $shoes->s_quantity }}" readonly>
              </div>



              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">created At</label>
                  <input type="text" class="form-control" name="created_at" placeholder="Created At" value="{{ $shoes->created_at }}" readonly>
                </div>

                <div class="col mb-3">
                  <label class="form-label">Updated At</label>
                  <input type="text" class="form-control" name="update_at" placeholder="Updated At" value="{{ $shoes->updated_at }}" readonly>
                </div>
            </div>

              </div>

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




