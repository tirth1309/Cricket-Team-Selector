<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
</head>
<body>

	

	<?php
	//session_unset(); 

	//session_destroy();
	//echo 'Logging Out';
	//echo '<script type="text/javascript">location.href="http://localhost/dbmsproject/login.php";</script>>'; 
	//unset($_SESSION['logged_in']);  
    //session_destroy();
    session_start();
	session_destroy();
	//echo 'You have been logged out. <a href="#">Go back</a>'; 
    echo "logged out ";
    header('Location: login.php');
    //echo '<script type="text/javascript">location.href="http://localhost/dbmsproject/login.php";</script>>';
?>

</body>
</html>