<!Doctype Html>
<html>
	<head>
		<title>PLAYING XI</title>
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
		background-image: url("https://wallpapercave.com/wp/wp2686809.jpg");
		background-repeat:no-repeat;
		background-attachment:fixed;
}
	


</style>
	
	</head>

<body>
		
		<h1 style="text-align: center;font-size: 50px;color:black"> PLAYING XI</h1>
		<br><br>
			<form action="conn.php" method="post">
<div class="container">
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Opponent: </label>
    <select class="form-control" id="exampleFormControlSelect1" name="where">
      <option value="H">Home</option>
		<option value="A">Away</option>

    </select>
  </div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Select Opponent: </label>
    <select class="form-control" id="exampleFormControlSelect1" name="oppo">
      <option value="aus">Australia</option>
		<option value="nz">New Zealand</option>
		<option value="sa">South Africa</option>
		<option value="sri">Sri Lanka</option>
		<option value="pak">Pakistan</option>
    </select>
		<br>
	  
	  <button class="btn btn-primary my-2 my-sm-0" type="submit">Get my Team</button>
	  <a href="front.php"><button class="btn btn-danger my-2 my-sm-0" type="button">Go Back</button></a>
  </div>
    </div>

</form>

		
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$k=4;
$l=1;
$a=2;
$b=4;
$selected_val = 'aus';
//$selected_val2 = 'H';
if(isset($_POST['oppo']))
{
$selected_val = $_POST['oppo'];
//$selected_val2 = $_POST['where'];
//echo "You have selected :" .$selected_val; 
//echo "You have selected :" .$selected_val2;   // Displaying Selected Value
if($selected_val=='aus')
{
    $k=4;
	$l=1;
	$a=2;
	$b=4;
}
else if($selected_val=='sa')
{
    $k=5;
	$l=1;
	$a=1;
	$b=4;
}
else if($selected_val=='pak')
{
    $k=3;
	$l=1;
	$a=2;
	$b=5;
}
else if($selected_val=='sri')
{
    $k=5;
	$l=1;
	$a=1;
	$b=4;
}
else if($selected_val=='nz')
{	
    $k=4;
	$l=1;
	$a=3;
	$b=3;
}	

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql_1 = "SELECT * FROM Cricket_Team";
$result = $conn->query($sql_1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Team_Name"]. " - Name: " . $row["Team_Ranking"]. " " . $row["Trophies_Won"]. "<br>";
    }
}*/
/*$opp="Select * opponents";
$result_opp=$conn->query($opp);
if($result_opp->num_rows>0)
{
	while($o=$result_opp->fetch_assoc())
	{
		
    }		
}*/	
$sql_2 = "SELECT * FROM Batsman";
$result_1=$conn->query($sql_2);
if($result_1->num_rows>0)
{
	//while($row=$result_1->fetch_assoc())
	//{
		 
	        $sql_3="Update Batsman Set Bat_Points=0";
			 if($conn->query($sql_3)===TRUE)
			{
				//echo "Success<br>";
			}
			$Bat_Avg_1="Update Batsman Set Bat_Points = (Bat_Points + 100) Where Bat_Avg>50";
			$Bat_Avg_2="Update Batsman Set Bat_Points = (Bat_Points + 90) Where Bat_Avg>40 and Bat_Avg<50";
			$Bat_Avg_3="Update Batsman Set Bat_Points = (Bat_Points + 80) Where Bat_Avg>30 and Bat_Avg<40";
			$Bat_Avg_4="Update Batsman Set Bat_Points = (Bat_Points + 70) Where Bat_Avg>25 and Bat_Avg<30";
			$Bat_Avg_5="Update Batsman Set Bat_Points = (Bat_Points + 60) Where Bat_Avg>20 and Bat_Avg<25";
			$Bat_Avg_6="Update Batsman Set Bat_Points = (Bat_Points + 50) Where Bat_Avg<20";

			$is_Captain="Update Batsman Set Bat_Points=(Bat_Points+1000) Where Is_Captain=1";
			
			$No_of_Centuries_1="Update Batsman Set Bat_Points = (Bat_Points+50) Where Centuries>20";
			$No_of_Centuries_2="Update Batsman Set Bat_Points = (Bat_Points+40) Where Centuries>15 and Centuries<20";
			$No_of_Centuries_3="Update Batsman Set Bat_Points = (Bat_Points+30) Where Centuries>10 and Centuries<15";
			$No_of_Centuries_4="Update Batsman Set Bat_Points = (Bat_Points+20) Where Centuries>5 and Centuries<10";
			$No_of_Centuries_5="Update Batsman Set Bat_Points = (Bat_Points+10) Where Centuries>0 and Centuries<5";
			
			$Matches_Played_1="Update Batsman Set Bat_Points = (Bat_Points+80) Where Matches_Played>250";
			$Matches_Played_2="Update Batsman Set Bat_Points = (Bat_Points+70) Where Matches_Played>200 and Matches_Played<250";
			$Matches_Played_3="Update Batsman Set Bat_Points = (Bat_Points+60) Where Matches_Played>150 and Matches_Played<200";
			$Matches_Played_4="Update Batsman Set Bat_Points = (Bat_Points+50) Where Matches_Played>100 and Matches_Played<150";
			$Matches_Played_5="Update Batsman Set Bat_Points = (Bat_Points+40) Where Matches_Played>50  and Matches_Played<100";
			
			$St_Rate_1="Update Batsman Set Bat_Points = (Bat_points +50) Where St_Rate>100";
			$St_Rate_2="Update Batsman Set Bat_Points = (Bat_points +40) Where St_Rate>90 and St_Rate<100";
			$St_Rate_3="Update Batsman Set Bat_Points = (Bat_points +30) Where St_Rate>85 and St_Rate<90";
			$St_Rate_4="Update Batsman Set Bat_Points = (Bat_points +20) Where St_Rate>75 and St_Rate<85";
			
			$is_Injured="Update Batsman Set Bat_Points = (Bat_Points -2000) Where is_Injured = 1";

			$Bat_Form_1="Update Batsman Set Bat_Points = (Bat_Points + 100) Where Bat_Form >60";
			$Bat_Form_2="Update Batsman Set Bat_Points = (Bat_Points + 90) Where Bat_Form >50 and Bat_Form<60";
			$Bat_Form_3="Update Batsman Set Bat_Points = (Bat_Points + 80) Where Bat_Form >45 and Bat_Form<50";
			$Bat_Form_4="Update Batsman Set Bat_Points = (Bat_Points + 70) Where Bat_Form >40 and Bat_Form<45";
			$Bat_Form_5="Update Batsman Set Bat_Points = (Bat_Points + 60) Where Bat_Form >30 and Bat_Form<40";
			$Bat_Form_6="Update Batsman Set Bat_Points = (Bat_Points + 50) Where Bat_Form >20 and Bat_Form<30";

			

			/*$sort="Select * from Batsman Order By Bat_Points DESC";
			$sql_4="Select * from Batsman";
			$result_2 = $conn->query($sort);*/
			//if ($result_2->num_rows > 0)
			//{
    // output data of each row
			if($conn->query($Bat_Avg_2) and $conn->query($Bat_Avg_1) and $conn->query($is_Captain) and $conn->query($Bat_Avg_3) and $conn->query($Bat_Avg_4)
				and $conn->query($Bat_Avg_5) and $conn->query($Bat_Avg_6) and $conn->query($No_of_Centuries_1) and $conn->query($No_of_Centuries_2) 
				and $conn->query($No_of_Centuries_3) and $conn->query($No_of_Centuries_4) and $conn->query($No_of_Centuries_5) 
				and $conn->query($Matches_Played_1) and $conn->query($Matches_Played_2) and $conn->query($Matches_Played_3) and $conn->query($Matches_Played_4)
				and $conn->query($Matches_Played_5) and $conn->query($St_Rate_1) and $conn->query($St_Rate_2) and $conn->query($St_Rate_3) and $conn->query($St_Rate_4)
				and $conn->query($is_Injured) and $conn->query($Bat_Form_1) and $conn->query($Bat_Form_2) and $conn->query($Bat_Form_3) and $conn->query($Bat_Form_4)
				and $conn->query($Bat_Form_5) and $conn->query($Bat_Form_6)===TRUE)
			{
				//echo "Success<br>";
		    }
			$sort="Select * from Batsman Order By Bat_Points DESC limit $k";
			$sql_4="Select * from Batsman";
			$result_2 = $conn->query($sort);
			//while($row = $result_2->fetch_assoc())
			//{
				//echo "Name " . $row["Bat_Name"]. " Points " . $row["Bat_Points"]. "<br>" ;
            //}
			//}
			$sql_img="Select * from Batsman order by Bat_Points DESC limit $k";
			$result_img=$conn->query($sql_img);
			while($x=$result_img->fetch_assoc())
			{
				$y=$x["Bat_img"];
				//echo "<img src=\"$y\" width=\"100\" height=\"100\"";
				//echo "<br>";
				$name_Bat=$x["Bat_Name"];
				$St_Rate_Bat=$x["St_Rate"];
				$Matches_Bat=$x["Matches_Played"];
				$Avg_Bat=$x["Bat_Avg"];
				$Centuries_Bat=$x["Centuries"];
			
				
			echo "<div class=\"container\">
  
				<table class=\"table\">
				<thead style=\"font-size:22px;color:black\">
				<tr>
					<th>BATSMAN</th>
					<th>PLAYER DETAILS</th>
					
				</tr>
				</thead>
				<tbody style=\"font-size:18px;color: black\">
				<tr>
				<td><img src=\"$y\" width=\"170\" height=\"170\"></td>
				<td style=\"font-weight: bold;\">Name: $name_Bat<br>St Rate: $St_Rate_Bat<br> Matches Played: $Matches_Bat <br>Batting Average: $Avg_Bat<br> Centuries: $Centuries_Bat</td>
				</tr>      

				</tbody>
				</table>
				</div>";
			//echo "<br>";	
	        }
			
			
			
}

			
$sql_wk="Select * From wicket_keeper";
$result_wk=$conn->query($sql_wk);
if($result_wk->num_rows>0)
{
		$sql_5="Update wicket_keeper Set wk_points=0";
		if($conn->query($sql_5)===TRUE)
		{
			//echo "Success<br>";
		}
		$Wk_Bat_Avg_1="Update wicket_keeper set wk_points=(wk_points+100) where Bat_Avg>50";
		$Wk_Bat_Avg_2="Update wicket_keeper set wk_points=(wk_points+90) where Bat_Avg>40 and Bat_Avg<50";
		$Wk_Bat_Avg_3="Update wicket_keeper set wk_points=(wk_points+80) where Bat_Avg>30 and Bat_Avg<40";
		$Wk_Bat_Avg_4="Update wicket_keeper set wk_points=(wk_points+70) where Bat_Avg>20 and Bat_Avg<30";
		
		$catches_1="Update wicket_keeper set wk_points=(wk_points+100) where Catches>300";
		$catches_2="Update wicket_keeper set wk_points=(wk_points+90) where Catches>250 and Catches<300";
		$catches_3="Update wicket_keeper set wk_points=(wk_points+80) where Catches>150 and Catches<250";
		$catches_4="Update wicket_keeper set wk_points=(wk_points+50) where Catches<150";
		
		$St_outs_1="Update wicket_keeper set wk_points=(wk_points + 80) where Stump_Outs>100";
		$St_outs_2="Update wicket_keeper set wk_points=(wk_points + 70) where Stump_Outs>80 and Stump_Outs<100";
		$St_outs_3="Update wicket_keeper set wk_points=(wk_points + 60) where Stump_Outs>60 and Stump_Outs<80";
		$St_outs_4="Update wicket_keeper set wk_points=(wk_points + 50) where Stump_Outs<60";
		
		$Matches_wk_1="Update wicket_keeper set wk_points=(wk_points+80) where Matches>300";
		$Matches_wk_2="Update wicket_keeper set wk_points=(wk_points+70) where Matches>200 and Matches<300";
		$Matches_wk_3="Update wicket_keeper set wk_points=(wk_points+60) where Matches>100 and Matches<200";
		$Matches_wk_4="Update wicket_keeper set wk_points=(wk_points+50) where Matches>50";
		
		$St_Rate_wk_1="Update wicket_keeper set wk_points=(wk_points + 50) where St_rate>100";
		$St_Rate_wk_2="Update wicket_keeper set wk_points=(wk_points + 40) where St_rate>90 and St_Rate<100";
		$St_Rate_wk_3="Update wicket_keeper set wk_points=(wk_points + 30) where St_rate<90";
		
		
		if($conn->query($Wk_Bat_Avg_1) and $conn->query($Wk_Bat_Avg_2) and $conn->query($Wk_Bat_Avg_3) and $conn->query($Wk_Bat_Avg_4) 
		   and $conn->query($catches_1) and $conn->query($catches_2) and $conn->query($catches_3) and $conn->query($catches_4)
	       and $conn->query($St_outs_1) and $conn->query($St_outs_2) and $conn->query($St_outs_3) and $conn->query($St_outs_4)
           and $conn->query($Matches_wk_1) and $conn->query($Matches_wk_2)and $conn->query($Matches_wk_3)and $conn->query($Matches_wk_4) 
		   and $conn->query($St_Rate_wk_1) and $conn->query($St_Rate_wk_2) and $conn->query($St_Rate_wk_3)===TRUE)
		{
			//echo "Success<br>";
		}
		$sort_wk="Select * from wicket_keeper order by wk_points DESC limit $l";
		$result_4=$conn->query($sort_wk);
		//while($row_2 = $result_4->fetch_assoc())
			//{
				//echo "Name " . $row_2["Wk_Name"]. " Points " . $row_2["wk_points"]. "<br>";
            //}
			$sql_img_wk="Select * from wicket_keeper order by wk_points DESC limit $l";
			$result_img_wk=$conn->query($sql_img_wk);
			while($j=$result_img_wk->fetch_assoc())
			{
				$i=$j["Wk_img"];
				//echo "<img src=\"$i\" width=\"100\" height=\"100\"";
				//echo "<br>";
				//echo "<br>";
				$name_wk=$j["Wk_Name"];
				$Matches_wk=$j["Matches"];
				$Avg_Wk=$j["Bat_Avg"];
				$St_outs_Wk=$j["Stump_Outs"];
			echo "<div class=\"container\">
  
				<table class=\"table\">
				<thead style=\"font-size:22px;color:black\">
				<tr>
					<th>WICKET KEEPER</th>
					<th>PLAYER DETAILS</th>
				</tr>
				</thead>
				<tbody style=\"font-size:18px;color: black\">
				<tr>
				<td><img src=\"$i\" width=\"170\" height=\"170\"></td>
				<td style=\"font-weight: bold;\">Name: $name_wk<br>Matches: $Matches_wk<br>Bat_Avg: $Avg_Wk<br>Stump Outs: $St_outs_Wk</td> 
				</tr>      

				</tbody>
				</table>
				</div>";
			//echo "<br>";	
	        }				
				
				
}	
			

$sql_all="Select * From all_rounder";
$result_all=$conn->query($sql_all);
if($result_all->num_rows>0)
{
		$sql_6="Update all_rounder Set all_points=0";
		if($conn->query($sql_6)===TRUE)
		{
			//echo "Success<br>";
		}
		$Bat_Avg_all_1="Update All_rounder set all_points=(all_points+80) where Bat_Avg>40";
		$Bat_Avg_all_2="Update All_rounder set all_points=(all_points+70) where Bat_Avg>30 and Bat_Avg<40";
		$Bat_Avg_all_3="Update All_rounder set all_points=(all_points+60) where Bat_Avg>20 and Bat_Avg<30";
		$Bat_Avg_all_4="Update All_rounder set all_points=(all_points+50) where Bat_Avg<20";
		
		$St_rate_all_1="Update All_rounder set all_points=(all_points+80) where St_Rate>100";
		$St_rate_all_2="Update All_rounder set all_points=(all_points+70) where St_Rate>90 and St_Rate<100";
		$St_rate_all_3="Update All_rounder set all_points=(all_points+60) where St_Rate<90";
		
		$Economy_All_1="Update All_Rounder set all_points=(all_points+80) where Economy<5";
		$Economy_All_2="Update All_Rounder set all_points=(all_points+70) where Economy<5.5 and Economy>5";
		$Economy_All_3="Update All_Rounder set all_points=(all_points+60) where Economy<6 and Economy>5.5";
		$Economy_All_4="Update All_Rounder set all_points=(all_points+50) where Economy>6";
		
		$Wickets_All_1="Update All_Rounder set all_points=(all_points+80) where Wickets_per_match>=1.5";
		$Wickets_All_2="Update All_Rounder set all_points=(all_points+70) where Wickets_per_match>=1 and Wickets_per_match<1.5";
		$Wickets_All_3="Update All_Rounder set all_points=(all_points+60) where Wickets_per_match<1";
		
		
		

		if($conn->query($Bat_Avg_all_1) and $conn->query($Bat_Avg_all_2) and $conn->query($Bat_Avg_all_3) and $conn->query($Bat_Avg_all_4) 
		   and $conn->query($St_rate_all_1) and $conn->query($St_rate_all_2) and $conn->query($St_rate_all_3)
	       and $conn->query($Economy_All_1) and $conn->query($Economy_All_2)and $conn->query($Economy_All_3)and $conn->query($Economy_All_4)
		   and $conn->query($Wickets_All_1) and $conn->query($Wickets_All_2) and $conn->query($Wickets_All_3)===TRUE)
		{
			//echo "Success<br>";
		}	
		$sort_all="Select * from all_rounder order by all_points DESC limit $a";
		$result_5=$conn->query($sort_all);
		/*while($row_3 = $result_5->fetch_assoc())
			{
				echo "Name " . $row_3["All_Name"]. " Points " . $row_3["all_points"]. "<br>";
            }*/
			$sql_img_all="Select * from all_rounder order by all_Points DESC limit $a";
			$result_img_all=$conn->query($sql_img_all);
			while($n=$result_img_all->fetch_assoc())
			{
				$m=$n["all_img"];
				//echo "<img src=\"$m\" width=\"100\" height=\"100\"";
				//echo "<br>";
				$name_all=$n["All_Name"];
				$Matches_all=$n["Matches"];
				$Avg_all=$n["Bat_Avg"];
				$Economy_all=$n["Economy"];
				echo "<div class=\"container\">
  
				<table class=\"table\">
				<thead style=\"font-size:22px;color:black\">
				<tr>
					<th>ALL ROUNDER</th>
					<th>PLAYER DETAILS</th>
				</tr>
				</thead>
				<tbody style=\"font-size:18px;color: black\">
				<tr>
				<td style=\"font-weight: bold;\"><img src=\"$m\" width=\"170\" height=\"170\"</td>
				<td style=\"font-weight: bold;\">Name: $name_all<br>Matches: $Matches_all<br>Bat Avg: $Avg_all<br>Economy: $Economy_all</td> 
				</tr>      

				</tbody>
				</table>
				</div>";
			//echo "<br>";	
	        }
			
			//echo "<br>";
			
}
$sql_bowl = "SELECT * FROM Bowler";
$result_bowl=$conn->query($sql_bowl);
if($result_bowl->num_rows>0)
{
	//while($row=$result_1->fetch_assoc())
	//{
		 
	        $sql_4="Update Bowler Set Bowl_Points=0";
			if($conn->query($sql_4)===TRUE)
			{
				//echo "Success<br>";
			}
			
			$Bowl_Economy_1="Update Bowler Set Bowl_Points = (Bowl_Points + 100) where Economy < 5";
			$Bowl_Economy_2="Update Bowler Set Bowl_Points = (Bowl_Points + 85) where Economy < 5.5 and Economy > 5";
			$Bowl_Economy_3="Update Bowler Set Bowl_Points = (Bowl_Points + 70) where Economy < 6 and Economy >5.5";
			$Bowl_Economy_4="Update Bowler Set Bowl_Points = (Bowl_Points + 50) where Economy >6";
			
			$Wickets_1="Update Bowler Set Bowl_Points = (Bowl_Points + 100) where Wickets_per_match>=1.75";
			$Wickets_2="Update Bowler Set Bowl_Points = (Bowl_Points + 90) where Wickets_per_match>1.5 and Wickets_per_match<1.75";
			$Wickets_3="Update Bowler Set Bowl_Points = (Bowl_Points + 80) where Wickets_per_match>1.25 and Wickets_per_match<1.5";
			$Wickets_4="Update Bowler Set Bowl_Points = (Bowl_Points + 70) where Wickets_per_match>1.00 and Wickets_per_match<1.25";
			$Wickets_5="Update Bowler Set Bowl_Points = (Bowl_Points + 60) where Wickets_per_match<1";
			
			$Matches_Played_6="Update Bowler Set Bowl_Points = (Bowl_Points+80) Where Matches>150";
			$Matches_Played_7="Update Bowler Set Bowl_Points = (Bowl_Points+70) Where Matches>100 and Matches<150";
			$Matches_Played_8="Update Bowler Set Bowl_Points = (Bowl_Points+60) Where Matches>=75 and Matches<100";
			$Matches_Played_9="Update Bowler Set Bowl_Points = (Bowl_Points+50) Where Matches>50 and Matches<75";
			$Matches_Played_10="Update Bowler Set Bowl_Points = (Bowl_Points+40) Where Matches<50";
			
			$is_Injured_Bowl="Update Bowler Set Bowl_Points = (Bowl_Points-2000) where Is_Injured = 1";
			
			$Five_Wickets_1="Update Bowler Set Bowl_Points =(Bowl_Points+100) where 5w>1";
			$Five_Wickets_2="Update Bowler Set Bowl_Points =(Bowl_Points+50) where 5w=1";
			
			$Bowl_Form_1="Update Bowler Set Bowl_Points = (Bowl_Points + 100) where Bowl_Form>60";
			$Bowl_Form_2="Update Bowler Set Bowl_Points = (Bowl_Points + 90) where Bowl_Form>50 and Bowl_Form<60";
			$Bowl_Form_3="Update Bowler Set Bowl_Points = (Bowl_Points + 80) where Bowl_Form>40 and Bowl_Form<50";
			$Bowl_Form_4="Update Bowler Set Bowl_Points = (Bowl_Points + 70) where Bowl_Form>30 and Bowl_Form<40";
			$Bowl_Form_5="Update Bowler Set Bowl_Points = (Bowl_Points + 60) where Bowl_Form<30";
			
			
			if ($conn->query($Bowl_Economy_1) and $conn->query($Bowl_Economy_2) and $conn->query($Bowl_Economy_3) and $conn->query($Bowl_Economy_4) 
				and $conn->query($Wickets_1) and $conn->query($Wickets_2)and $conn->query($Wickets_3)and $conn->query($Wickets_4)and $conn->query($Wickets_5)
				and $conn->query($Matches_Played_6) and $conn->query($Matches_Played_7)and $conn->query($Matches_Played_8)and $conn->query($Matches_Played_9)
				and $conn->query($Matches_Played_10) and $conn->query($is_Injured_Bowl) and $conn->query($Five_Wickets_1) and $conn->query($Five_Wickets_2)
				and $conn->query($Bowl_Form_1) and $conn->query($Bowl_Form_2) and $conn->query($Bowl_Form_3) and $conn->query($Bowl_Form_4) and $conn->query($Bowl_Form_5)===TRUE)
			{
				//echo "Success<br>";
			}
			$sort_5="Select * from Bowler Order By Bowl_Points DESC limit $b";
			$sql_5="Select * from Bowl";
			$result_3 = $conn->query($sort_5);
			echo "<br>";
			/*while($row_1 = $result_3->fetch_assoc())
			{
				echo "Name " . $row_1["Bowler_Name"]. " Points " . $row_1["Bowl_Points"]. "<br>";
            }*/
			$sql_img_bowl="Select * from Bowler order by Bowl_Points DESC limit $b";
			$result_img_bowl=$conn->query($sql_img_bowl);
			while($i=$result_img_bowl->fetch_assoc())
			{
				$z=$i["Bowl_img"];
				$name_bowl=$i["Bowler_Name"];
				$Matches_Bowl=$i["Matches"];
				$Economy_Bowl=$i["Economy"];
				$Five_wickets_Bowl=$i["5w"];
				echo "<div class=\"container\">
				
				<table class=\"table\">
				<thead style=\"font-size:22px;color:black\">
				<tr>
					<th>BOWLER</th>
					<th>PLAYER DETAILS</th>
				</tr>
				</thead>
				<tbody style=\"font-size:18px;color: black\">
				<tr>
				<td><img src=\"$z\" width=\"170\" height=\"170\"</td>
				<td style=\"font-weight: bold;\">Name: $name_bowl<br>Matches: $Matches_Bowl<br>Economy: $Economy_Bowl<br>5w: $Five_wickets_Bowl</td> 
				</tr>      

				</tbody>
				</table>
				</div>";
			//echo "<br>";	
	        
				//echo "<img src=\"$z\" width=\"100\" height=\"100\"";
				//echo "<br>";
			}
}		
			
		
		
$conn->close();

}
?>


</body>
</html>
