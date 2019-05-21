@extends('layouts.admin-app')
@section('content')

	<div class="container main">
		@for($i=0; $i<sizeof($room);$i+=10)
			<div class="row">
				@for($j=$i; $j<$i+10; $j++)
					@if($room[$j]->status == 0)
						@if($room[$j]->id_type == 1)
							<button class="box-room col-1 type-1 m-1 color-white"> {{$room[$j]->id}}</button>
						
						@elseif($room[$j]->id_type == 2)
							<button class="box-room col-1 type-2 m-1 color-white"> {{$room[$j]->id}}</button>
						
						@elseif($room[$j]->id_type == 3)
							<button class="box-room col-1 type-3 m-1 color-white"> {{$room[$j]->id}}</button>
						
						@elseif($room[$j]->id_type == 4)
							<button class="box-room col-1 type-4 m-1 color-white"> {{$room[$j]->id}}</button>
						@endif
					@else
						<div class="box-room col-1 used m-1 color-white"> {{$room[$j]->id}}</div>
					@endif
				@endfor
			</div>
		@endfor
	</div>
@endsection