<!DOCTYPE html>
<html>
<head>
	<title>Country Delete Page</title>
</head>
<body>	
	<center>
		<a href="{{route('home.userDetails')}}">Back</a> |
		<a href="/logout">Logout</a> 

		<br>
		<table border="1">
			<tr>
				<td colspan="4"><h2><center>Country Delete</center></h2></td>
			</tr>
			<tr>
				<td>ID</td>
				<td colspan="3">{{$countries['cid']}}</td>
			</tr>
			<tr>
				<td>Country Name</td>
				<td colspan="3">{{$countries['name']}}</td>
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
						<input type="hidden" name="id" value="{{$countries['cid']}}"/>
						<input type="submit" name="submit" value="Confirm"/>
						<a href="/AdminHome/countryDetails"><input type="button" name="countryDetails" value="Cancel"></a>
					</form>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>