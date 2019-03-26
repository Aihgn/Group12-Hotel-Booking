@extends('layouts.app')
@section('content')

	<!-- Primary Page Layout
		================================================== -->

	<div class="section background-dark over-hide">	
		<div class="hero-center-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10 col-sm-8 parallax-fade-top">
						<div class="hero-text">Wellcome to x-hotel</div>
					</div>
					<div class="col-12 mt-3 mb-5 parallax-fade-top">
						<div class="hero-stars">
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="col-12 mt-3 parallax-fade-top">
						<div class="booking-hero-wrap">
							<div class="row justify-content-center">
								<div class="col-5 no-mob">
									<div class="input-daterange input-group" id="flight-datepicker">
										<div class="row">	
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>
													<span class="date-text date-depart"></span>
												</div>
											</div>
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>
													<span class="date-text date-return"></span>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-5 no-mob">
									<div class="row">
										<div class="col-6">
											<select name="adults" class="wide">
												<option data-display="adults">adults</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-6">
											<select name="children" class="wide">
												<option data-display="children">children</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6  col-sm-4 col-lg-2">
									<a class="booking-button" href="search.html">check availability</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg-home">
			<div class="bg parallax-top" style="padding-bottom: 70px;">
				<figure class="bg__figure">
					<div class="bg__figure-inner">
						<div class="bg__figure-img" style="background-image: url(./img/1.jpg)"></div>
						<div class="bg__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<div class="arrow-nav">
				<div class="container">
					<div class="row">
						{{-- <div class="col-md-6 text-center text-md-left">
							<a href="#" title="Twitter"><i class="fab fa-twitter-square" style="font-size: 2rem;"></i></a>
		                    <a href="#" title="Facebook"><i class="fab fa-facebook-square" style="font-size: 2rem;"></i></i></a>        
		                    <a href="#" title="Isnstagram"><i class="fab fa-instagram" style="font-size: 2rem;"></i></a>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--rooms 
		========================================= -->
    <div class="section padding-top-bottom over-hide background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">luxury</div>
					<h1 class="text-center padding-bottom-small">Our rooms</h1>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-6">
					<div class="room-box background-white">
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="room-img">
							<img src="img/room1.jpg">
						</div>
						<div class="room-box-in">
							<h4 class="">Family room</h4>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="booking-button" href="">book from 300$</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="room-box background-white">
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="room-img">
							<img src="img/room2.jpg">
						</div>
						<div class="room-box-in">
							<h4 class="">Luxury room</h4>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="booking-button" href="">book from 380$</a>	
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white">
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="room-img">
							<img src="img/room3.jpg">
						</div>
						<div class="room-box-in">
							<h4 class="">Couple room</h4>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="booking-button" href="">book from 250$</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white" >
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="room-img">
							<img src="img/room4.jpg">
						</div>
						<div class="room-box-in">
							<h4 class="">Standard room</h4>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="booking-button" href="">book from 200$</a>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>


	<!-- Quote 
		======================================================== -->
	<div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url('img/5.jpg')"></div>	
		<div class="section z-bigger">		
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div id="owl-sep-1" class="owl-carousel owl-theme">								 
							<div class="item">						
								<div class="quote-sep">	
									<h4>"Chilling out on the bed in your hotel room watching television, while wearing your own pajamas, is sometimes the best part of a vacation."</h4>
									<h6>Jason Salvatore</h6>	
								</div>											
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"Every good day starts off with a cappuccino, and there's no place better to enjoy some frothy caffeine than at the Thalia Hotel."</h4>
									<h6>Terry Mitchell</h6>	
								</div>									
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"I still enjoy traveling a lot. I mean, it amazes me that I still get excited in hotel rooms just to see what kind of shampoo they've left me."</h4>
									<h6>Michael Brighton</h6>
								</div>										
							</div>								 
						</div>	
					</div>
				</div>
			</div>					
		</div>
	</div>
@endsection