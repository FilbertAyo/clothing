
<x-app-layout>


    <div class="container py-5">

        <div class="row" style="display: flex; justify-content: space-between;">
        <div class="title-section mb-5">
            <h2 class="text-uppercase">Available Shoes</h2>
          </div>
          <div class="icons">
            <a href="" class="cloth btn height-auto" style="color: white;">Add item</a>
        </div>
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
                    <th class="product-name">Shoe Name</th>
                    <th class="product-price">Price (each)</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-remove">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @if($shoes->count()>0)
                    @foreach ($shoes as $shoe)

                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="product-thumbnail">
                      <img src="{{ asset($shoe->s_image) }}" alt="" class="img-fluid">
                    </td>
                    <td class="product-name">
                        {{ $shoe->s_name }}
                    </td>
                    <td>TZS-{{ $shoe->s_price }}/=</td>
                    <td>{{ $shoe->s_quantity }}</td>
                    <td>
                        <a href="{{ route('shoes.show', $shoe->id) }}" class="btn btn-blue height-auto ">Details</a>
                        <a href="{{ route('shoes.edit', $shoe->id) }}" class="btn btn-secondary height-auto ">Edit</a>

                        <form action="{{ route('shoes.destroy',$shoe->id) }}" method="POST" type= "button" class="btn height-auto p-0" onsubmit="return confirm('Delete')">
                            @csrf
                            @method('DELETE')

                                                <button class="btn btn-primary height-auto ">Delete</button>
                                            </form>

                    </td>
                  </tr>

                  @endforeach
                  @else
                  <tr>
                    <td class="text-center" colspan="7">Product not found</td>
                </tr>
            @endif

                </tbody>
              </table>
            </div>
        </div>

      </div>


      <div class="container py-7">

        @yield('content')
      </div>


      <div class="overlay hidden"></div>


</x-app-layout>

