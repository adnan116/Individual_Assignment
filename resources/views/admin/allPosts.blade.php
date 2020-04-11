<!DOCTYPE html>
<html>
<head>
	<title>Requested Post</title>
</head>
<body>	
	<center>
		<h1>Requested Post list</h1>
		<a href="/AdminHome">Back</a> |
		<a href="/logout">Logout</a> 

		<br><br><br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Travel Cost</th>
				<th>Travel Medium</th>
				<th>Facilities</th>
				<th colspan="2">ACTION</th>
			</tr>
			
			@foreach($posts as $po)
				
				<tr>
					<td>{{ $po->poid }}</td>
					<td>{{ $po->cost }}</td>
					<td>{{ $po->travel_medium }}</td>
					<td>{{ $po->facilities }}</td>
					<td>
						<a href="{{route('home.approve', $po->poid)}}"><input type="button" name="approve" value="Approve"></a>&emsp;&ensp;
						<a href="{{route('home.decline', $po->poid)}}"><input type="button" name="del" value="Decline"></a>
					</td>
				</tr>
				
			@endforeach

		</table>
	</center>

</body>
</html>