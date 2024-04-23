
<x-app-layout>


<div class="add_form ad">

<form action="{{ route('dashboard.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div style="display: flex; justify-content:center; color: black;">EDIT CLOTH DETAILS </div>



        <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <img  class="form-control" name="image" placeholder="image" src="{{asset($product->image)  }}" style="height: auto;">
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input type="text" class="form-control" name="name" placeholder="product_name" value="{{ $product->name }}">
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price (each product)</label>
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}">
              </div>

              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text"  class="form-control" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}">
              </div>


<div class="flex justify-end">
    <button class="btn btn-primary">Update</button>
</div>



        </form>
              </div>




            </x-app-layout>




