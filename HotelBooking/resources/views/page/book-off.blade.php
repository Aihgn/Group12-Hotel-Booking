@extends('layouts.admin-app')
@section('content')
	<form method="POST" action="{{ route('book-off') }}">
	@csrf
		
	{{-- --}}
		<div id="date-pick mt-4" class="tab-pane">
			<h5 class="color-white mt-2 mb-3 ml-4">Pick Date</h5>
			<div class="row ml-5">
				<div class="col-5 mt-1">
					<div class="row mb-4">
						<div class="input-daterange input-group" id="flight-datepicker">
							<div class="row">	
								<div class="col-12 col-md-6 mb-4">
									<div class="form-item">
										<span class="fontawesome-calendar"></span>
										<input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="chech-in date" data-date-format="dd/mm/yyyy"/>
										<span class="date-text date-depart"></span>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-item">
										<span class="fontawesome-calendar"></span>
										<input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out date" data-date-format="dd/mm/yyyy"/>
										<span class="date-text date-return"></span>
									</div>
								</div>
							</div>
						</div>
					</div>							
				</div>
			</div>		
		</div>
	{{-- --}}
		<h5 class="color-white mt-2 mb-1 ml-4">Select Room</h5>
		<div class="container main">
			@for($i=0; $i<sizeof($room);$i+=10)
				<div class="row">
					@for($j=$i; $j<$i+10; $j++)
						@if($room[$j]->status == 0)
							@if($room[$j]->id_type == 1)
								<button class="box-room col-1 type-1 m-1 color-white" id="{{$room[$j]->id_type}}"> {{$room[$j]->id}}</button>
							
							@elseif($room[$j]->id_type == 2)
								<button class="box-room col-1 type-2 m-1 color-white" id="{{$room[$j]->id_type}}"> {{$room[$j]->id}}</button>
							
							@elseif($room[$j]->id_type == 3)
								<button class="box-room col-1 type-3 m-1 color-white" id="{{$room[$j]->id_type}}"> {{$room[$j]->id}}</button>
							
							@elseif($room[$j]->id_type == 4)
								<button class="box-room col-1 type-4 m-1 color-white" id="{{$room[$j]->id_type}}"> {{$room[$j]->id}}</button>
							@endif
						@else
							<div class="box-room col-1 used m-1 color-white"> {{$room[$j]->id}}</div>
						@endif
					@endfor
				</div>
			@endfor
		</div>
		<div class="mb-1 ml-4 mt-4">
				<h5 class="color-white">Guest infomation</h5>
				<div class="input-field"> 
	                <label for="name">{{ __('Full name:')}}</label>
	                <input id="name" name="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }} color-white" value="" required>	                
	            </div>
	            <div class="input-field">
	                <label for="email">{{__('Email:')}}</label>
	                <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} color-white" name="email" value="" required>

	                @if ($errors->has('email'))
	                    <div class="alert-error text-center mt-4">
	                        <strong>*{{ $errors->first('email') }}</strong>
	                    </div>
	                @endif
	            </div>
	            <div class="input-field">
		        	<label for="phone_number">{{ __('Phone number:')}}</label>
		            <input id="phone_number" type="text" class="color-white" name="phone_number" value="" required>   
		        </div>
		</div>
		<div class="ml-4 input-field">
        	<h5 class="color-white">Total</h5>
            <input id="total" type="text" class="color-white" name="total" value="" required readonly="">   
        </div>
		<div class="button-div text-center mt-4 col-12 col-md-4">
	        <button type="submit" class="input-button p-2">
	            {{ __('Book now') }}
	        </button>                                
	    </div>
	</form>
	<script type="text/javascript">
		$(document).ready(function(){
			var i=0;
			var total = 0;
			$('.box-room').click(function(){
				var id = this.id;
				if($(this).css('backgroundColor') == 'rgba(0, 0, 0, 0)'){
		           $(this).css('background-color', 'rgb(153, 15, 15)');
		           i++;
		           $.ajax({
	                    url:"{{route('book-off.action')}}",
	                    method:'GET',
	                    data:{id:id},
	                    dataType: 'json',
	                    success:function(data)
	                    {                
	                       total += data[0].price*calDate();
	                       $('#total').val(total);
	                    }
	                });
		        } else {
		           $(this).css('background-color', 'rgba(0, 0, 0, 0)');
		           i--;
		           $.ajax({
	                    url:"{{route('book-off.action')}}",
	                    method:'GET',
	                    data:{id:id},
	                    dataType: 'json',
	                    success:function(data)
	                    {                
	                       total -= data[0].price*calDate();
	                       $('#total').val(total);
	                    }
	                });
		        }
			});
			function toDate(dateStr) {
			  var parts = dateStr.split(".")
			  return new Date(parts[2], parts[1] - 1, parts[0])
			}

			function calDate(){
				var start=toDate($('#start-date').val());
				var end=toDate($('#end-date').val());
				var day = (end-start)/1000/60/60/24;
				if(day==0) day=1;
				return day;
			}
		});
	</script>
@endsection