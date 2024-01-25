@extends('layouts.main')

@section('container')


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2023/12/18/f53e4335-6cc9-47b9-ba45-171f8126707d.jpg.webp?ect=4g" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2023/12/20/9b52b315-1791-439b-b68a-2639ce5e2f68.jpg.webp?ect=4g" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2023/12/20/532817f8-4d3a-43ad-a7e3-c97ced16e016.jpg.webp?ect=4g" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>


    
@endsection
