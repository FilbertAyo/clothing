@extends('layout.shoe')

@section('content')


<div class="add_form hidden">

<form  action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
     {!!  csrf_field() !!}
    <div style="display: flex; justify-content:center; color: black;">NEW WOMEN CLOTH DETAILS</div>
        <div class="mb-3">
          <label for="title" class="form-label">Image</label>
          <input type="file" class="form-control" name="s_image" placeholder="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Shoe name</label>
            <input type="text" class="form-control" name="s_name" placeholder="product_name">
          </div>

          <div class="mb-3">
            <label for="productCode" class="form-label">Price (each product)</label>
            <input type="text" class="form-control" name="s_price" placeholder="Price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Quantity</label>
            <input type="text"  class="form-control" name="s_quantity" placeholder="Quantity"> </input>
          </div>

<div class="mb-3">
     <button class="add btn btn-primary">Add</button>
</div>


    </form>

    </div>


@endsection
