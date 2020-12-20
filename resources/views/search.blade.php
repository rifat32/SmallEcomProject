@extends('master')
@section('content')

  <div class="trending-wrapper">

      <div class="row">
          <h2>Results for products</h2>
      @foreach ($products as $product)
          <div class="col-md-3">
            <a href="details/{{$product->id}}">
            <div class="card">
                <div class="card-body">
                <img style="height: 200px" src="{{$product->gallery}}" alt="product">

                </div>
                <div class="card-footer">
                    <h2>{{$product->name}}</h2>
                    <h3>{{$product->description}}</h3>
                </div>
            </div>
        </a>
          </div>
      @endforeach
    </div>

  </div>


@endsection

