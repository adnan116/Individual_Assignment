<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center>
		<form method="POST">
			{{ csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>Login</center></h2></td>
				</tr>
				<tr>
					<td colspan="3" style="color: red;"><h4><center>{{session('msg')}}</center></h4></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td colspan="2"><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td colspan="2"><input type="password" name="password"></td>
				</tr>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
					<td><a href="/register">Go to Register</a></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>