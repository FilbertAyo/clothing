

<x-app-layout>


<div class="add_form ad">

    <form action="{{ route('shoes.update', $shoes->id)}}" method="POST">
        @csrf
        @method('PUT')
            <div style="display: flex; justify-content:center; color: black;">NEW SHOES DETAILS</div>



            <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <img  class="form-control" name="s_image" placeholder="image" src="{{ asset($shoes->s_image) }}" style="height: auto;">
                </div>


                <div class="mb-3">
                    <label for="name" class="form-label">Product name</label>
                    <input type="text" class="form-control" name="s_name" placeholder="product_name" value="{{ $shoes->s_name }}">
                  </div>

                  <div class="mb-3">
                    <label for="price" class="form-label">Price (each product)</label>
                    <input type="text" class="form-control" name="s_price" placeholder="Price" value="{{ $shoes->s_price }}">
                  </div>

                  <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text"  class="form-control" name="s_quantity" placeholder="Quantity" value="{{ $shoes->s_quantity }}">
                  </div>

<div class="flex justify-end">
    <button class="btn btn-primary">Update</button>
</div>


            </form>
                  </div>

</x-app-layout>







