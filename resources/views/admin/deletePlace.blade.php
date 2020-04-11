<!DOCTYPE html>
<html>
<head>
	<title>Place Delete Page</title>
</head>
<body>	
	<center>
		<a href="{{route('home.placeDetails')}}">Back</a> |
		<a href="/logout">Logout</a> 

		<br>
		<table border="1">
			<tr>
				<td colspan="4"><h2><center>Place Delete</center></h2></td>
			</tr>
			<tr>
				<td>ID</td>
				<td colspan="3">{{$place['pid']}}</td>
			</tr>
			<tr>
				<td>Place Name</td>
				<td colspan="3">{{$place['pname']}}</td>
			</tr>
			<tr>
				<td>Place Description</td>
				<td colspan="3">{{$place['pdes']}}</td>
			</tr>
			<tr>
				<td>Country Name</td>
				<td colspan="3">{{$country['name']}}</td>
			</tr>
			<tr>
				<td>Scout Name</td>
				<td colspan="3">{{$users['name']}}</td>
			</tr>
			<tr>
				<td><h3 style="color: red;">Are you sure to delete?</h3></td>
				<td>
					<form method="post">
						{{csrf_field()}}
						<input type="hidden" name="id" value="{{$place['pid']}}"/>
						<input type="submit" name="submit" value="Confirm"/>
						<a href="/AdminHome/placeDetails"><input type="button" name="placeDetails" value="Cancel"></a>
					</form>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>