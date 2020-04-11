<!DOCTYPE html>
<html>
<head>
	<title>Place Details</title>
</head>
<body>	
	<center>
		<h1>Place list</h1>
		<a href="/UserHome">Back</a> |
		<a href="/logout">Logout</a> 

		<br><br><br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Place Name</th>
				<th>Place Description</th>
				<th>Country Name</th>
				<th>Scout Name</th>
			</tr>
			
			@foreach($places as $p)
			<tr>
				<td>{{$p->pid}}</td>
				<td>{{$p->pname}}</td>
				<td>{{$p->pdes}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->scout}}</td>
			</tr>
			@endforeach

		</table>
	</center>

</body>
</html>