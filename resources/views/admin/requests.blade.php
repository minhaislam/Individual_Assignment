<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	

	<h1>User list</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> ||
	<a href="/logout">Logout</a> 

	<br>
	@foreach($std as $s)
			@if($s->admin_name == NULL)
	<table border="1">
		<tr>
			<th>ID</th>
			<th>country</th>
			<th>city</th>
			<th>placename</th>
			<th>cost</th>
			<th>travelmedium</th>
			<th>description</th>
			<th>scout_name</th>
			<th>Action</th>
			
		</tr>
		@break
	@endif

		@endforeach
		
		
		@foreach($std as $s)
			@if($s->admin_name == NULL)
		<tr>

			<td>{{ $s->id }}</td>
			<td>{{ $s->country }}</td>
			<td>{{ $s->city }}</td>
			<td>{{ $s->placename }}</td>
			<td>{{ $s->cost }}</td>
			<td>{{ $s->travelmedium }}</td>
			<td>{{ $s->description }}</td>
			<td>{{ $s->scout_name }}</td>
			<td>
				
				<a href="{{route('admin.accept', $s->id)}}">Accept</a>||<button><a href="{{url('admin/reject/'.$s->id)}}">Reject</a></button>
			</td>
		</tr>
			@endif
		@endforeach

	</table>


</body>
</html>