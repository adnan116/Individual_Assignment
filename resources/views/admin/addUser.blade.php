<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<center>
		<a href="/AdminHome">Back</a> |
		<a href="/logout">Logout</a> 
		<form method="POST">
			{{ csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>Add User</center></h2></td>
				</tr>
				<tr>
					<td colspan="3">
						<center>
							@foreach($errors->all() as $error)
								<h4 style="color: red;">{{$error}}</h4>
							@endforeach
						</center>
					</td>
				</tr>
				<tr>
					<td>Name:</td>
					<td colspan="2"><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td colspan="2"><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="2"><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td colspan="2">
						<select name="role">
							<option value="">Select Role</option>
							<option value="scout">Scout</option>
							<option value="user">User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td colspan="2"><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td colspan="2"><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Register"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>