@extends('layouts.app')
@section('content')
	@include('layouts.backgroundcrop')
	<div class="section background-grey-2 over-hide">
		<div class="container">
	        <div class="row">	        	
               	<ul class="tab_pill mt-5 pr-1 background-white">
                  <li class="active"><a class="pill" href="#profile" data-toggle="pill">Profile</a></li>
                  <li><a  class="pill" href="#change_password" data-toggle="pill">Change Password</a></li>
                  <li><a class="pill" href="#my_booking" data-toggle="pill">My Bookings</a></li>	                  
                </ul>           
	            <div class="col-7 mt-5 background-white">
	                
	                <div class="tab-content">
	                        <div class="tab-pane active" id="profile">
	                            
	                            <div class="input-field"> 
	                                <label for="name">{{ __('Full name:')}}</label>
	                                <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }} color-black" value="{{ Auth::user()->name }}" required autofocus>
	                                @if ($errors->has('name'))
                                    <div class="alert-error text-center mt-4">
                                        <strong>*{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif 
	                            </div>
	                            <div class="input-field">
	                                <label for="email">{{__('Email:')}}</label>
	                                <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} color-black" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <div class="alert-error text-center mt-4">
                                        <strong>*{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
	                            </div>
	                            <div class="input-field">
	                            	<label for="phone_number">{{ __('Phone number:')}}</label>
	                                <input id="phone_number" type="text" class="color-black" value="{{$acc_info[0]->phone_number}}" required autofocus>   
	                            </div>	                            
	                            <div class="input-field">
	                                <label for="address1">Address:</label>
	                                <input id="address1" type="text" class="color-black" value="{{$acc_info[0]->address}}" required autofocus>
	                            </div>	                            
	                            <div class="input-field">
	                                <label for="password" >{{ __('Current password:') }}</label>
	                                <input id="password" type="password" class="color-black" name="password" required>

	                                @if ($errors->has('password'))
	                                    <div class="alert-error text-center mt-4">
	                                        <strong>*{{ $errors->first('password') }}</strong>
	                                    </div>
	                                @endif                              
	                            </div>
	                            <div class="button-div text-center col-6  col-sm-4 col-lg-12">    
	                                <button type="submit" class="input-button mb-5">
	                                    {{ __('Submit') }}
	                                </button>                                
	                            </div>
	                        </div>
	                        <div class="tab-pane" id="change_password">
	                             <div class="input-field">
	                                <label for="password" >{{ __('Current password:') }}</label>
	                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} color-white" name="password" required>

	                                @if ($errors->has('password'))
	                                    <div class="alert-error text-center mt-4">
	                                        <strong>*{{ $errors->first('password') }}</strong>
	                                    </div>
	                                @endif                              
	                            </div>
	                            <div class="input-field">
	                                <label for="password" >{{ __('New password:') }}</label>
	                                <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} color-white" name="password" required>

	                                @if ($errors->has('password'))
	                                    <div class="alert-error text-center mt-4">
	                                        <strong>*{{ $errors->first('password') }}</strong>
	                                    </div>
	                                @endif                              
	                            </div>
	                            <div class="input-field">
	                                <label for="password-confirm">{{ __('Confirm Password:') }}</label>
	                                <input id="password-confirm" type="password"  name="password_confirmation" class="color-white" required>
	                            </div>
	                            <div class="button-div text-center col-6  col-sm-4 col-lg-12">    
	                                <button type="submit" class="input-button mb-5">
	                                    {{ __('Submit') }}
	                                </button>                                
	                            </div>
	                        </div>
	                        <div class="tab-pane" id="my_booking">
	                             <h4>Pane C</h4>
	                            <p>bi tristique senectus et netus et malesuada fames
	                                ac turpis egestas.</p>
	                        </div>		                        
	                </div>
	            </div>	            
	        </div>
	    </div>
	</div>
@endsection