<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> |
	<a href="/logout">Logout</a> 

	<br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{ $std->id }}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>{{$std->user_name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$std->email}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$std->password}}</td>
		</tr>
		<tr>
			<td>Tyoe</td>
			<td>{{$std->type}}</td>
		</tr>
	</table>

</body>
</html>