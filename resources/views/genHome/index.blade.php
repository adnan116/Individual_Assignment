<!DOCTYPE html>
<html>
<head>
	<title>Travel Guide</title>
</head>
<body>
	<center>
		<h1>Welcome!!! ABC Travel Guide</h1><br><br>
		<a href="/login">Login</a><br><br>
		<a href="/register">Registration</a>

		<br><br><br>
		<h3>Post About Travelling Places</h3>
		<table border="1">
			<tr>
				<th>Place Name</th>
				<th>Place Description</th>
				<th>Country Name</th>
				<th>Travel Cost</th>
				<th>Travel Medium</th>
				<th>Facilities</th>
			</tr>
			
			@foreach($places as $p)
			<tr>
				<td>{{$p->pname}}</td>
				<td>{{$p->pdes}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->cost}}</td>
				<td>{{$p->travel_medium}}</td>
				<td>{{$p->facilities}}</td>
			</tr>
			@endforeach

		</table>
	</center>


</body>
</html>