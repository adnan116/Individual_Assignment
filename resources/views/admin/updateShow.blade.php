<!DOCTYPE html>
<html>
<head>
	<title>User Update Page</title>
</head>
<body>
	<center>
		<form method="POST">
			{{ csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>User Update</center></h2></td>
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
					<td>ID:</td>
					<td colspan="2"><input type="text" readonly name="id" value="{{$id}}"></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td colspan="2"><input type="text" name="name" value="{{$name}}"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td colspan="2"><input type="text" name="phone" value="{{$phone}}"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="2"><input type="text" name="email" value="{{$email}}"></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td colspan="2">
						<select name="role">
							<option value="" {{ ( $role == '') ? 'selected' : '' }}>Select Role</option>
							<option value="admin" {{ ( $role == 'admin') ? 'selected' : '' }}>Admin</option>
							<option value="scout" {{ ( $role == 'scout') ? 'selected' : '' }}>Scout</option>
							<option value="user" {{ ( $role == 'user') ? 'selected' : '' }}>User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td colspan="2"><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td colspan="2"><input type="password" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>