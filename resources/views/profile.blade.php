@extends('app')

@section('content')

	<h2>The Laravel Exercise</h2>
	
	<h3>Customer Profile</h3>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
                <th>Date Created</th>
				<th></th>
			</tr>
		</thead>
        <tbody>
            <tr>
                <td>{{$customer['name']}}</td> 
                <td>{{$customer['date_created']}}</td>
            </tr>
        </tbody>
		
	</table>
	

@endsection