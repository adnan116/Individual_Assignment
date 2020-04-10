<!DOCTYPE html>
<html>
<head>
	<title>User Delete Page</title>
</head>
<body>	
	<center>
		<a href="{{route('home.userDetails')}}">Back</a> |
		<a href="/logout">Logout</a> 

		<br>
		<table border="1">
			<tr>
				<td colspan="4"><h2><center>User Delete</center></h2></td>
			</tr>
			<tr>
				<td>ID</td>
				<td colspan="3">{{$id}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td colspan="3">{{$name}}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td colspan="3">{{$phone}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td colspan="3">{{$email}}</td>
			</tr>
			<tr>
				<td>Type</td>
				<td colspan="3">{{$role}}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td colspan="3">{{$username}}</td>
			</tr>
			<tr>
				<td><h3 style="color: red;">Are you sure to delete?</h3></td>
				<td>
					<form method="post">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$id}}"/>
						<input type="submit" name="submit" value="Confirm"/>
						<a href="/AdminHome/userDetails"><input type="button" name="userDetails" value="Cancel"></a>
					</form>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>