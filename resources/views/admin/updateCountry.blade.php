<!DOCTYPE html>
<html>
<head>
	<title>Update Country</title>
</head>
<body>
	<center>
		<a href="/AdminHome">Back</a> |
		<a href="/logout">Logout</a> 
		<form method="POST">
			{{csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>Update Country</center></h2></td>
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
					<td colspan="2"><input type="text" name="name" value="{{$countries['name']}}"></td>
				</tr>
				<tr>
					<td>Scout Name:</td>
					<td colspan="2">
						<select name="scoutName">
							<option value="">Select Scout</option>
							@foreach($users as $key)
							<option value="{{$key['id']}}" {{ ( $key['name'] == $user['name']) ? 'selected' : '' }}>{{$key['name']}}</option>
							@endforeach
						</select>
					</td>
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