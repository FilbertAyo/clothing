@extends('layout.admin')

@section('body')


<div class="add_form hidden">

<form  action="{{ route('admin.store') }}" method="POST">
    @csrf
    <div style="display: flex; justify-content:center; color: black;">NEW WOMEN CLOTH DETAILS</div>
        <div class="mb-3">
          <label for="title" class="form-label">Image</label>
          <input type="file" class="form-control" name="image" placeholder="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product name</label>
            <input type="text" class="form-control" name="name" placeholder="product_name">
          </div>

          <div class="mb-3">
            <label for="productCode" class="form-label">Price (each product)</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Quantity</label>
            <input type="text"  class="form-control" name="quantity" placeholder="Quantity"> </input>
          </div>

<div class="mb-3">
     <button class="add btn btn-primary">Add</button>
</div>


    </form>

    </div>


@endsection
