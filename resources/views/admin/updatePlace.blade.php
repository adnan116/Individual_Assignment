<!DOCTYPE html>
<html>
<head>
	<title>Update Place</title>
</head>
<body>
	<center>
		<a href="{{route('home.placeDetails')}}">Back</a> |
		<a href="/logout">Logout</a> 
		<form method="POST">
			{{csrf_field()}}
			<table>
				<tr>
					<td colspan="3"><h2><center>Update Place</center></h2></td>
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
					<td colspan="2"><input type="text" name="id" readonly value="{{$place['pid']}}"></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td colspan="2"><input type="text" name="name" value="{{$place['pname']}}"></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td colspan="2"><textarea name="description">{{$place['pdes']}}</textarea></td>
				</tr>
				<tr>
					<td>Country Name:</td>
					<td colspan="2">
						<select name="country">
							<option value="">Select Country</option>
							@foreach($countries as $key)
							<option value="{{$key['cid']}}" {{ ( $key['name'] == $country['name']) ? 'selected' : '' }}>{{$key['name']}}</option>
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