<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/plugins.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script><!--Jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><!--boostrap-->
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">

    <!-- Ioncion -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">		
		body{
			background-color: rgba(0,0,0,.85);
		}
		.HearderButton{
			display: flex;
			background-color: #ed254e;
			border:1px solid black;
			height: 80px;
			text-align: center;
			padding: 0;
		}
		.HearderButton a{
			color: #fff;
			padding-top:5px;
			width: 100%;
		}
		.HearderButton a:hover{
			text-decoration: none;
			background-color: #c22747;
		}
		.tab-pane{
			text-align: center;
		}
		.card-horizontal {
		    display: flex;
		    flex: 1 1 auto;
		}
		.card-body{
			display: flex;
		}

		.radio-group{
		    position: relative;
		}

		.radio{		    	    		    
		    border-bottom: 1px dotted black;
		    cursor:pointer;
		    margin: 2px 0; 
		    width: 100%;
		    height: 70px;

		}
		.radio >input+label{
			cursor:pointer;
		}
		
		.radio.selected{
		    background-color: rgba(0,0,0,.7);
		    color: #fff;
		}
		.price-sel{
			display: flex;
			position: absolute;
			bottom: 0;
			width: 80%;
    		right: 0;
		}
		.price-sel input{
			width: 100%;
		    border: 0;
		    color: #ffff;
		    background-color: #2c2c2ca1;
		    text-align: center;
		    flex-grow: 2;		    
		    user-select: none;
		    outline: none;
		    cursor: pointer;
		}
		.price-sel a{
			flex-grow: 1;
		}

		.payment{
			display: flex;
			color:#fff;
		}
		
	</style>	
	
</head>
<body>

	<div class="fluid-container">
		<div class="menuheader">
			<div class="row  ">
				<div class="HearderButton col-3 justify-content-center" >
					<a data-toggle="tab" href="#qty">Adults & children</a>
				</div>
				<div class="HearderButton col-3 justify-content-center" >
					<a data-toggle="tab" href="#date-pick">Date of stay</a>
				</div>
				<div class="HearderButton col-3 justify-content-center" >
					<a data-toggle="tab" href="#room-pick">Accomodations</a>
				</div>
				<div class="HearderButton col-3 justify-content-center" >
					<a data-toggle="tab" href="#total">Total</a>
				</div>
			</div>
		</div>
			<form method="POST" action="{{ route('booking') }}">
				 @csrf
				<div class="tab-content">
					<div id="qty" class="tab-pane active">
						<h1 class="text-center mb-4 mt-4 color-white">Guest & room</h1>
						<div class="row justify-content-center">
							<div class="col-5 mt-5">
								<div class="row mb-4">
									<div class="col-6">
										<select name="adults" class="wide">
											<option data-display="1 adults" value="1">1 adults</option>
											<option value="2">2 adults</option>
											<option value="3">3 adults</option>
										</select>
									</div>
									<div class="col-6">
										<select name="children" class="wide">
											<option data-display="1 children" value="1">1 children</option>
											<option value="2">2 children</option>
											<option value="3">3 children</option>
										</select>
									</div>
									<div class="col-4 mt-4">
										<a href="">Add a room</a>
									</div>
								</div>
								<div class="button-div text-center col-6  col-sm-4 col-lg-12">                                
	                                <a class="input-button" data-toggle="tab" href="#date-pick">
	                                    {{ __('Update room & guest') }}
	                                </a>                                
	                            </div>							
							</div>
						</div>
					</div>
					<div id="date-pick" class="tab-pane">
						<h1 class="text-center mb-4 mt-4 color-white">Date picker</h1>
						<div class="row justify-content-center">
							<div class="col-5 mt-5">
								<div class="row mb-4">
									<div class="input-daterange input-group" id="flight-datepicker">
										<div class="row">	
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="chech-in date" data-date-format="dd/mm/yyyy"/>
													<span class="date-text date-depart"></span>
												</div>
											</div>
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out date" data-date-format="dd/mm/yyyy"/>
													<span class="date-text date-return"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								 <a class="input-button" data-toggle="tab" href="#room-pick">
	                                    {{ __('Update date of stay') }}
	                            </a>
	                            
							</div>
						</div>
					</div>
					<div id="room-pick" class="tab-pane">
						<h1 class="text-center mb-4 mt-4 color-white">Rooms</h1>
						<div class="row flex-row flex-nowrap justify-content-center">
					        <div class="col-10">	
					        @foreach($room as $r)			            
				            	<div class="card mb-4">			            		
					                <div class="card-horizontal">
					                    <div class="img-square-wrapper">
					                        <img class="room-img" src="img/{{$r->image}}" alt="Card image cap">
					                    </div>
					                    <div class="card-body">
					                    	<div class="col-6">
					                    		<h4 class="card-title">{{$r->name}}</h4>
						                        <p class="mt-3">{{$r->description}}</p>
												<ul class="text-md-left">
													<li>Max: 4 Person(s)</li>
													<li>View: City</li>
													<li>Size: 35m2/ 376ft2</li>
													<li>Starting<strong> $300</strong>/days</p></li>
												</ul>							
					                    	</div>
					                        <div class="radio-group col-6 text-md-left">
					                        	
					                        		<label class='radio' data-value="$300" >
					                        			<input id="rad1" type="radio" name="rad" />
					                        			<label for="rad1">Room only</label>
					                        			<span class="text-md-right">-$300</span>
					                        		</label>
					                        		<label class='radio' data-value="$350">
					                        			<input id="rad2" type="radio" name="rad"/>
					                        			<label for="rad2">Bed & Breakfast</label>
					                        			<span class="text-md-right">-$350</span>
					                        		</label>	         
					                        				
					                        	
					                        	<div class="price-sel">
					                        		
			                        				<input type="text" id="radio-value" name="radio-value" />
					                        		
					                        		 <a class="input-button" data-toggle="tab" href="#total">book</a>
					                        	</div>
					                        </div>
					                    </div>
					                </div>		
					            </div>	
					            @endforeach				           
					        </div>
						</div>
					</div>
					<div id="total" class="tab-pane">
						<h1 class="text-center mb-4 mt-4 color-white">Total</h1>
						<div class="payment">
							<div class="col-xs-12 col-4">
								<div>Your reservation</div>
							</div>
							<div class="col-xs-12 col-4">
								<div>Your infomation</div>
							</div>
							<div class="col-xs-12 col-4">
								<div>Payment Method</div>
								<div class="button-div text-center col-6  col-sm-4 col-lg-12">                                
                                <button type="submit" class="input-button">
                                    {{ __('Book now') }}
                                </button>                                
                            </div>
							</div>
						</div>
					</div>
				</div>
			</form>
	</div>
	<script type="text/javascript">
		$('.radio-group .radio').click(function(){
		    $(this).parent().find('.radio').removeClass('selected');
		    $(this).addClass('selected');
		    var val = $(this).attr('data-value');
		    //alert(val);
		    $(this).parent().find('input').val(val);
		});

		document.getElementById("radio-value").addEventListener("mousedown", function(event){
				event.preventDefault();
			});
	</script>


</body>
</html>
