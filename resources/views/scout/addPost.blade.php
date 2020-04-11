<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
</head>
<body>
	<center>
		<a href="/ScoutHome">Back</a> |
		<a href="/logout">Logout</a> 
		<form method="POST">
			{{ csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>Add Post</center></h2></td>
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
					<td>Place Name:</td>
					<td colspan="2">
						<select name="place">
							<option value="">Select Place</option>
							@foreach($places as $key)
							<option value="{{$key['pid']}}">{{$key['pname']}}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td>Travel Cost:</td>
					<td colspan="2"><input type="text" name="cost"></td>
				</tr>
				<tr>
					<td>Travel Medium:</td>
					<td colspan="2"><textarea name="medium"></textarea></td>
				</tr>
				<tr>
					<td>Facilities:</td>
					<td colspan="2">
						<textarea name="facilities"></textarea>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Post"></td>
					<td><input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>