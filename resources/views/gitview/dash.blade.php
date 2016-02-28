@extends('home')

@section('content')
	
	<table class="table">
 	<thead>
 		<th>Name</th>
 		<th>Open Issues</th>
 	</thead>
	@foreach($repo_list as $list)
	<tr>
		<td>
			<p>{{$list['name']}}</p>
		</td>
		<td>
			<p>{{$list['open_issues']}}</p>
		</td>
	</tr>
	

	@endforeach
	</table>

 	
 

@endsection