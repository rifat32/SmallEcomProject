@extends('master')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="product">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=755&q=80" class="d-block w-100" alt="product">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=753&q=80" class="d-block w-100" alt="product">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <div class="trending-wrapper">
      <h3>Trending Products</h3>
      <div class="row">
      @foreach ($products as $product)
          <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <a href="details/{{$product->id}}"> <img style="height: 200px" src="{{$product->gallery}}" alt="product"></a>

                </div>
            </div>
          </div>
      @endforeach
    </div>

  </div>


@endsection

