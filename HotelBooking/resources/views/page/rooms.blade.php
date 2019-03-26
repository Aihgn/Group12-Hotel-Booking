@extends('layouts.app')
@section('content')
		
	@include('layouts.backgroundcrop')
	
	<!-- Rooms
		================================= -->
	<div class="section padding-top-bottom over-hide background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
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
							<ul>
								<li>Max: 4 Person(s)</li>
								<li>View: City</li>
								<li>Size: 35m2/ 376ft2</li>
								<li>Starting<strong> $300</strong>/days</p></li>
							</ul>
							<a class="booking-button" href="">book now</a>
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
							<ul>
								<li>Max: 4 Person(s)</li>
								<li>View: City</li>
								<li>Size: 35m2/ 376ft2</li>
								<li>Starting<strong> $300</strong>/days</p></li>
							</ul>
							<a class="booking-button" href="">book now</a>	
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
							<ul>
								<li>Max: 4 Person(s)</li>
								<li>View: City</li>
								<li>Size: 35m2/ 376ft2</li>
								<li>Starting<strong> $300</strong>/days</p></li>
							</ul>
							<a class="booking-button" href="">book now</a>
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
							<ul>
								<li>Max: 4 Person(s)</li>
								<li>View: City</li>
								<li>Size: 35m2/ 376ft2</li>
								<li>Starting<strong> $300</strong>/days</p></li>
							</ul>
							<a class="booking-button" href="">book now</a>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>
@endsection