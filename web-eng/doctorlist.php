<?php
include_once("connection.php");
session_start();

if(isset($_SESSION['email'])){
	$result = mysqli_query($mysqli, "SELECT * FROM users  WHERE status='doctor' ORDER BY id DESC ");
}
else{
    header("Location: log in.php");
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="margin-top:20px;">
		<div style="text-align: center" class="jumbotron">
			<p style="font-size: 30px">Our Doctor List</p>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>" . $res['first_name'] . "</td>";
					echo "<td>" . $res['email'] . "</td>";
					echo "<td>" . $res['phone'] . "</td>";
					echo "<td><a href=\"details.php?id=$res[id]\">Details</a></td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>

</html>