<!Doctype Html>
<html>
	<head>
		<title>ALL BATSMEN</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body{
		background-image: url("https://cdn4.vectorstock.com/i/1000x1000/69/38/background-for-posters-night-cricket-stadium-in-vector-8906938.jpg");
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-size:2000px 1000px;
}

</style>
	
	</head>

<body>
<br>
	<h1 style="text-align: center;font-size: 50px;color:black">ALL BATSMEN</h1><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="Select * from bat_view";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	
	while($s=$result->fetch_assoc())
	{
		$Name=$s["Bat_Name"];
		$id=$s["Bat_id"];
		$Matches=$s["Matches_Played"];
		//echo $s["Player_Name"] . " ".$s["Age"] ." ".$s["Debut_Date"] ."<br>";

				
				
				echo"<div class=\"container\">
  
				<table class=\"table\">
				<thead style=\"font-size:18px;color:black\">
				<tr align=\"center\">
					<th>PLAYER NAME</th>
					<th>ID</th>
					<th>Matches</th>
					
				</tr>
				</thead>
				<tbody style=\"font-size:15px;color: black\">
				<tr align=\"center\">
					<td>$Name</td>
					<td>$id</td>
					<td>$Matches</td>
				</tr>	
				</tbody>	
				</table>
				</div>";
    }
}
?>

	<div class="container">
		
		<a href="front.php"><button class="btn btn-danger my-2 my-sm-0" type="button">Go Back</button></a>
		<br><br><br>
	</div>
</body>
</html>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		