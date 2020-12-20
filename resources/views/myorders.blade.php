@extends('master')
@section('content')

  <div class="trending-wrapper">

      <div class="row">
          <h2>My Orders</h2>

      @foreach ($orders as $product)
          <div class="col-12">
            <a href="details/{{$product->id}}">
            <div class="card">
                <div class="card-body">
                <img style="height: 200px" src="{{$product->gallery}}" alt="product">

                </div>
                <div class="card-footer">
                    <h2>Name: {{$product->name}}</h2>
                    <h4>Delivery Status: {{$product->status}}</h4>
                    <h4>Address: {{$product->address}}</h4>
                    <h4>Payment Status: {{$product->payment_status}}</h4>
                    <h4> Payment Method: {{$product->payment_method}}</h4>
                </div>
            </div>
        </a>

          </div>
      @endforeach

    </div>

  </div>


@endsection

