<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ url('/admin') }}">Manage stock</a>
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}



    <div class="container py-5">

        <div class="row" style="display: flex; justify-content: space-between;">
            <div class="title-section mb-5">
                <h2 class="text-uppercase">Available clothes</h2>
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
                      <img src="{{ asset($prod->image) }}" alt="" class="img-fluid">
                    </td>
                    <td class="product-name">
                        {{ $prod->name }}
                    </td>
                    <td>TZS-{{ $prod->price }}/=</td>
                    <td>{{ $prod->quantity }}</td>
                    <td>
                        <a href="{{ route('dashboard.show', $prod->id) }}" class="btn btn-blue height-auto ">Details</a>
                        <a href="{{ route('dashboard.edit', $prod->id) }}" class="btn btn-secondary height-auto ">Edit</a>

                        <form action="{{ route('dashboard.destroy',$prod->id) }}" method="POST" type= "button" class="btn height-auto p-0" onsubmit="return confirm('Delete')">
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



</x-app-layout>
