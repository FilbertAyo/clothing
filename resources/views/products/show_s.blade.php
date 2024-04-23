<x-app-layout>

    <div class="add_form ad">

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


</x-app-layout>




