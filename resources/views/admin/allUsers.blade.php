<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>	
	<center>
		<h1>User list</h1>
		<a href="/AdminHome">Back</a> |
		<a href="/logout">Logout</a> 

		<br><br><br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Type</th>
				<th>Username</th>
				<th colspan="2">ACTION</th>
			</tr>
			
			@foreach($users as $user)
			<tr>
				<td>{{ $user['id'] }}</td>
				<td>{{ $user['name'] }}</td>
				<td>{{ $user['phone'] }}</td>
				<td>{{ $user['email'] }}</td>
				<td>{{ $user['role'] }}</td>
				<td>{{ $user['username'] }}</td>
				<td>
					<a href="{{route('home.updateShow', $user['id'])}}"><input type="button" name="edit" value="Edit"></a>&emsp;&ensp;
					<a href="{{route('home.deleteShow', $user['id'])}}"><input type="button" name="del" value="Delete"></a>
				</td>
			</tr>
			@endforeach

		</table>
	</center>

</body>
</html>