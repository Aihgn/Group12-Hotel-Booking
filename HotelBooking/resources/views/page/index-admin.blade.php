@extends('layouts.admin-app')
@section('content')
	{{-- <input class="m-3" type="" name=""> --}}
	<table class="table table-hover">
    	<thead>
    		<tr>
    			<th>No.</th>	
    			<th>Name</th>
    			<th>Phone</th>
    			<th>Email</th>
    			<th>Date out</th>
    			<th>Status</th>
    			<th></th>
    		</tr>
    	</thead>
    	<tbody>    		
    		@foreach($res as $i=>$r)    
    		<tr>
    			<td>{{$i+1}}</td>
    			<td>{{$r->name}}</td>
    			<td>{{$r->phone_number}}</td>
    			<td>{{$r->email}}</td>
    			<td>{{$r->date_out}}</td>
    			@if($r->status == 0)
					<td><span class="stt-p p-2">Pending</span></td>
					<td class="p-1"><a href="{{route('check-in',$r->id)}}" class="bttn btn-invert pb-2 pt-2 pl-1 pr-1">Check-in</a></td>
				@elseif($r->status ==2)
					<td><span class="stt-c p-2">Cancel</span></td>
                @else
                    <td><span class="stt-d p-2">Done</span></td>
				@endif
    		</tr>    		
    		@endforeach
    	</tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#date-pick').on('change', function(){     
                if($('#date-pick').val()!=''){        
                    var date = $('#date-pick').val();  
                    $.ajax({
                        url:"{{route('admin.action')}}",
                        method:'GET',
                        data:{date:date},
                        dataType: 'json',
                        success:function(data)
                        {                  
                            $('#tbody').html('');
                            var i=0;     
                            for (var key in data) {                                
                                i++;
                                
                                var id = data[key].id;                               
                                var name = data[key].name;
                                var phone_number = data[key].phone_number;
                                var email = data[key].email;
                                var date_out = data[key].date_out;
                                var status = data[key].status;                                    
                                var badge = document.createElement('tr');
                                if(status == 0){
                                    badge.innerHTML =
                                        '<td>'+i+'</td>'+
                                        '<td>'+name+'</td>'+
                                        '<td>'+phone_number+'</td>'+
                                        '<td>'+email+'</td>'+
                                        '<td>'+date_out+'</td>'+
                                        '<td><span class="stt-p p-2">Pending</span></td>'+
                                        '<td class="p-1"><a href="admin/'+id+'" class="bttn btn-invert pb-2 pt-2 pl-1 pr-1">Check-in</a></td>'
                                        ;
                                }else if(status ==2){
                                    badge.innerHTML =
                                        '<td>'+i+'</td>'+
                                        '<td>'+name+'</td>'+
                                        '<td>'+phone_number+'</td>'+
                                        '<td>'+email+'</td>'+
                                        '<td>'+date_out+'</td>'+
                                        '<td><span class="stt-c p-2">Cancel</span></td>'
                                        ;
                                }else{
                                    badge.innerHTML =
                                        '<td>'+i+'</td>'+
                                        '<td>'+name+'</td>'+
                                        '<td>'+phone_number+'</td>'+
                                        '<td>'+email+'</td>'+
                                        '<td>'+date_out+'</td>'+
                                        '<td><span class="stt-d p-2">Done</span></td>'
                                        ;
                                }
                                    console.log(badge);                                
                                $('tbody').append(badge);
                                
                            }
                           
                        }
                    });
                }
            });
        });
    </script>
@endsection