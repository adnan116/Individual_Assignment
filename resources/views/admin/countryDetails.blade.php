<!DOCTYPE html>
<html>
<head>
	<title>Country Details</title>
</head>
<body>	
	<center>
		<h1>Country list</h1>
		<a href="/AdminHome">Back</a> |
		<a href="/logout">Logout</a> 

		<br><br><br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Country Name</th>
				<th>Scout Name</th>
				<th colspan="2">ACTION</th>
			</tr>
			
			@foreach($countries as $c)
			<tr>
				<td>{{$c->cid}}</td>
				<td>{{$c->name}}</td>
				<td>{{$c->scout}}</td>
				<td>
					<a href="{{route('home.updateCountry', $c->cid)}}"><input type="button" name="edit" value="Edit"></a>&emsp;&ensp;
					<a href="{{route('home.deleteCountry', $c->cid)}}"><input type="button" name="del" value="Delete"></a>
				</td>
			</tr>
			@endforeach

		</table>
	</center>

</body>
</html>