@extends('app')

@section('content')

	<h2>The Laravel Exercise</h2>
	
	<h3>Contacts for {{$customer->name}}</h3>
	
	@if(count($contacts) > 0)
	
		<div class="row">
	
		@foreach($contacts as $contact)
			
			<div class="col-md-3">
				<div class="card p-3">
					<div><strong>{{$contact->name}}</strong></div>
					<div>p:{{$contact->phone}}</div>
					<div>f:{{$contact->phone}}</div>
					<div>{{$contact->email}}</div>
					<div>{{$contact->city}}</div>
				</div>		
			</div>
		
		@endforeach
		
		</div>
	
	@else
	
		No contacts to display.
	
	@endif
			

@endsection