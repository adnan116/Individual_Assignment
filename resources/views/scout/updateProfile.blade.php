<!DOCTYPE html>
<html>
<head>
	<title>User Profile Page</title>
</head>
<body>
	<center>
		<a href="/ScoutHome">Back</a> |
		<a href="/logout">Logout</a> 
		<form method="POST">
			{{ csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>User Profile</center></h2></td>
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
					<td colspan="2"><input type="text" readonly name="id" value="{{$users->id}}"></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td colspan="2"><input type="text" name="name" value="{{$users->name}}"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td colspan="2"><input type="text" name="phone" value="{{$users->phone}}"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="2"><input type="text" name="email" value="{{$users->email}}"></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td colspan="2">
						<select name="role" disabled>
							<option value="" {{ ( $users->role == '') ? 'selected' : '' }}>Select Role</option>
							<option value="admin" {{ ( $users->role == 'admin') ? 'selected' : '' }}>Admin</option>
							<option value="scout" {{ ( $users->role == 'scout') ? 'selected' : '' }}>Scout</option>
							<option value="user" {{ ( $users->role == 'user') ? 'selected' : '' }}>User</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td colspan="2"><input type="text" name="username" value="{{$users->username}}"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td colspan="2"><input type="password" name="password" value="{{$users->password}}"></td>
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