<x-app-layout>


<div class="add_form ad">



        <div style="display: flex; justify-content:center; color: black;">CLOTH DETAILS</div>



        <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <img  class="form-control" name="image" placeholder="image" src="{{ asset($product->image )}}" style="height: auto;" readonly>
            </div>


            <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input type="text" class="form-control" name="name" placeholder="product_name" value="{{ $product->name }}" readonly>
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price (each product)</label>
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}" readonly>
              </div>

              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text"  class="form-control" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}" readonly>
              </div>



              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">created At</label>
                  <input type="text" class="form-control" name="created_at" placeholder="Created At" value="{{ $product->created_at }}" readonly>
                </div>

                <div class="col mb-3">
                  <label class="form-label">Updated At</label>
                  <input type="text" class="form-control" name="update_at" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
                </div>
            </div>

              </div>


</x-app-layout>
