@extends('master1')
@section('content')

	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Brand Item Name: {{$brand->name}} </h1>
  		</div>
	</div>


	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col">
				<div class="bbb_viewed_title_container">
					<h3 class="bbb_viewed_title"> Brand Item Name  </h3>
					<div class="bbb_viewed_nav_container">
						<div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
						<div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
					</div>
				</div>
				<div class="bbb_viewed_slider_container">
					<div class="owl-carousel owl-theme bbb_viewed_slider">
						@if(count($brand->items) >0)
						@foreach($brand->items as $bitem)
						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset($bitem->photo)}}" class="img-fluid">
									<p class="text-truncate">{{$bitem->name}}</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">{{number_format($bitem->price)}} Ks</span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<!-- <li class="list-inline-item"><i class='bx bxs-star' ></i></li> -->
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none"  data-id="{{$bitem->id}}" data-name="{{$bitem->name}}" data-photo="{{$bitem->photo}}" data-price="{{$bitem->price}}">Add to Cart</a>
								</div>
							</div>
						</div>
						@endforeach
						@else
						<div class="owl-item">
						
							<p class="justify-content-center text-center">No Brand Item</p>
					
						</div>
						@endif

					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col">
				<div class="bbb_viewed_title_container1">
					<h3 class="bbb_viewed_title1"> Brand Category  </h3>
					<div class="bbb_viewed_nav_container1">
						<div class="bbb_viewed_nav1 bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
						<div class="bbb_viewed_nav1 bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
					</div>
				</div>
				<div class="bbb_viewed_slider_container1">
					<div class="owl-carousel owl-theme bbb_viewed_slider">
						<div class="owl-item">
							<div class="bbb_viewed_item discount1 d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/saisai_one.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks</span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none" >Add to Cart</a>
								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/saisai_three.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/saisai_four.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/giordano_one.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/giordano_two.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/giordano_three.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/giordano_four.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/apple_four.jpeg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/apple_four.jpeg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>


						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/apple_one.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks</span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/apple_three.jpg')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>


						<div class="owl-item">
							<div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
								<div class="pad15">
									<img src="{{asset('front/image/item/apple_two.png')}}" class="img-fluid">
									<p class="text-truncate">Multi Item Carousel</p>
									<p class="item-price">
										<strike>250,000 Ks </strike> 
										<span class="d-block">230,000 Ks </span>
									</p>

									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
	


	<!-- Footer -->
	
	
@endsection