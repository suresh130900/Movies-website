@extends('layout') 
@section('content') 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($m as $n)
    <div class="carousel-item active">
      

      <img src="{{$n->poster}}" class="d-block w-100" height="700"  alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h5>{{$n->movie_name}}</h5>
        <p>{{$n->description}}</p>
      </div>
    </div>
  @endforeach
  </div>


  

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<main class="content">
<section class="panel">

				<h2>Most Watched</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper"> 
            @foreach($m as $n)
							    <div class="swiper-slide">
                    <a href="{% url 'movies:movie_detail' movie.slug %}">
                      <img src="{{$n->poster}}" class="img-thumbnail"  width="300" height="400">
                  <h3 class="hometitle">{{$n->movie_name}}</h3></a>
                </div>
                  @endforeach
							<!-- <div class="swiper-slide"><a href="#"><img src="{{$n->poster}}"></a></div> -->
						</div>
						<!-- <div class="nextdirection most-next"><img src="{{$n->poster}}"> </div>
						<div class="leftdirection most-prev"><img src="{{$n->poster}}"> </div>
          -->
					</div>
				</div>
        
			</section>

      <section class="panel">

				<h2>Longest Movies</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper"> 
            @foreach($l as $n)
							    <div class="swiper-slide">
                    <a href="{% url 'movies:movie_detail' movie.slug %}">
                      <img src="{{$n->poster}}" class="img-thumbnail"  width="300" height="400">
                  <h3 class="hometitle">{{$n->movie_name}}</h3></a>
                </div>
                  @endforeach
							<!-- <div class="swiper-slide"><a href="#"><img src="{{$n->poster}}"></a></div> -->
						</div>
						<!-- <div class="nextdirection most-next"><img src="{{$n->poster}}"> </div>
						<div class="leftdirection most-prev"><img src="{{$n->poster}}"> </div>
          -->
					</div>
				</div>
        
			</section>


      <section class="panel">

				<h2>Tamil Movies</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper"> 
            @foreach($t as $n)
							    <div class="swiper-slide">
                    <a href="{% url 'movies:movie_detail' movie.slug %}">
                      <img src="{{$n->poster}}" class="img-thumbnail"  width="300" height="400">
                  <h3 class="hometitle">{{$n->movie_name}}</h3></a>
                </div>
                  @endforeach
							<!-- <div class="swiper-slide"><a href="#"><img src="{{$n->poster}}"></a></div> -->
						</div>
						<!-- <div class="nextdirection most-next"><img src="{{$n->poster}}"> </div>
						<div class="leftdirection most-prev"><img src="{{$n->poster}}"> </div>
          -->
					</div>
				</div>
        
			</section>

      <section class="panel">

				<h2>Japanes Movies</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper"> 
            @foreach($j as $n)
							    <div class="swiper-slide">
                    <a href="{% url 'movies:movie_detail' movie.slug %}">
                      <img src="{{$n->poster}}" class="img-thumbnail"  width="300" height="400">
                  <h3 class="hometitle">{{$n->movie_name}}</h3></a>
                </div>
                  @endforeach
							<!-- <div class="swiper-slide"><a href="#"><img src="{{$n->poster}}"></a></div> -->
						</div>
						<!-- <div class="nextdirection most-next"><img src="{{$n->poster}}"> </div>
						<div class="leftdirection most-prev"><img src="{{$n->poster}}"> </div>
          -->
					</div>
				</div>
        
			</section>
      <section class="panel">

				<h2>Top List</h2>
				<div class="mostslider">
					<div class="swiper-container">
						<div class="swiper-wrapper"> 
            @foreach($ll as $n)
							    <div class="swiper-slide">
                    <a href="{% url 'movies:movie_detail' movie.slug %}">
                      <img src="{{$n->poster}}" class="img-thumbnail"  width="300" height="400">
                  <h3 class="hometitle">{{$n->movie_name}}</h3></a>
                </div>
                  @endforeach
							<!-- <div class="swiper-slide"><a href="#"><img src="{{$n->poster}}"></a></div> -->
						</div>
						<!-- <div class="nextdirection most-next"><img src="{{$n->poster}}"> </div>
						<div class="leftdirection most-prev"><img src="{{$n->poster}}"> </div>
          -->
					</div>
				</div>
        
			</section>
      </main>
@stop 