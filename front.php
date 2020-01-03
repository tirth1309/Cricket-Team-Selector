<!DOCTYPE html>
<html>
<head>
	<title>Team Selector</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    
  *{
    box-sizing: border-box;
}

body{
    margin:0;
}

img{
    max-width: 100%;
    height: auto;
}

.pad {
    padding-top: 20px;
}

.row1{
    margin-top: 0%;
    background: linear-gradient(-45deg, #005ce6 0, #80b3ff 100%);
}

.feat ,.feat-bel{
    color : #fff;
    text-align: center;
} 

.hero{
    color : white;
    background-image: url('https://livewallpaper.info/wp-content/uploads/2017/08/ms-dhoni-team-free-download-hd-1920x1080-wallpaper-wp60010033.jpg');
    background-size:     cover;       
    background-repeat:   no-repeat;
    background-position: center center;
    padding-top: 15em;
    padding-bottom: 15em;
    padding-left: 5em;
}

.hero-text-1{
    font-size: 65px;
}

.hero-text-2 {
    font-size: 23px;
}


.btn {
    margin-right: 5px;
}


  </style>



</head>
<body>




  <?php 
    session_start();
  ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Team Selector
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" data-toggle="tooltip" title="View all Batsmen" data-placement="right" href="bat_view.php">All Batsmen</a>
          <a class="dropdown-item" data-toggle="tooltip" title="View all Bowlers" data-placement="right" href="bowl_view.php">All Bowlers</a>
          <a class="dropdown-item" data-toggle="tooltip" title="View all players" data-placement="right" href="player.php">All Players</a>
          <a class="dropdown-item" data-toggle="tooltip" title="View best XI" data-placement="right" href="conn.php">Playing XI</a>
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Add Players
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" data-toggle="tooltip" title="Add a Batsman" data-placement="right" href="add_bat.php">Batsman</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Add a Bowler" data-placement="right" href="add_bowl.php">Bowler</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Add an All Rounder" data-placement="right" href="add_allrounder.php">All Rounder</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Add a Wicket Keeper" data-placement="right" href="add_wk.php">Wicket Keeper</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Update Players
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" data-toggle="tooltip" title="Update Batsman details" data-placement="right" href="update_bat.php">Batsman</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Update Bowler details" data-placement="right" href="update_bowl.php">Bowler</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Update All Rounder details" data-placement="right" href="update_all.php">All Rounder</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Update Wicket Keeper details" data-placement="right" href="#">Wicket Keeper</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Remove Players
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" data-toggle="tooltip" title="Remove a Batsman" data-placement="right" href="remove_bat.php">Batsman</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Remove a Bowler" data-placement="right" href="#">Bowler</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Remove an All Rounder" data-placement="right" href="#">All Rounder</a>
          <a class="dropdown-item" data-toggle="tooltip" title="Remove a Wicket Keeper" data-placement="right" href="#">Wicket Keeper</a>
        </div>
      </ul>
      <a href="add_coach.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Add User</button></a>
      <a href="logout.php"><button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Log Out</button></a>
    </div>
  </nav>



<!-- Pictue Section -->

  <div class="container-fluid hero">
    <div class="row">
      <div class="col-*-12">
        <h1 class="hero-text-1">Welcome to Team Selector</h1>
        <p class="hero-text-2">Select the best possible playing 11 for any match</p>
      </div>
    </div>
  </div>

  <div class="container-fluid row1">
    <div class="row">
      <div class="col-sm-4 pad">
        <h3 class="feat">More Than 30 Players</h3>
        <p class="feat-bel">Select your best squad of the given options</p>
      </div>
      <div class="col-sm-4 pad">
        <h3 class="feat">Dynamic Selection</h3>
        <p class="feat-bel">Depending on your opponents playing XI changes</p>
      </div>
      <div class="col-sm-4 pad">
        <h3 class="feat">Authorised access</h3>
        <p class="feat-bel">Only authorised personel will be able to access this software</p>
      </div>
    </div>
  </div>


  <br>
  <div class="container-fluid">
  <center><h2>Upcoming Matches</h2></center><br>

  <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="https://i.pinimg.com/originals/e6/63/63/e663638b9bd789937a703abd6cc3bdf2.png" alt="England" style="height: 170px;">
          <div class="card-body">
            <h5 class="card-title">India vs England</h5>
            <p class="card-text">India will be facing england in a 5 match ODI series from 23rd February to 15th March</p>
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="https://vignette.wikia.nocookie.net/logopedia/images/c/c9/South-africa-cricket-logo-tattoo112.jpg/revision/latest?cb=20180126224529" alt="South Africa" style="height: 170px;">
          <div class="card-body">
            <h5 class="card-title">India vs South Africa</h5>
            <p class="card-text">India will be facing South Africa in a 3 match ODI series from 23rd March to 1st April </p>
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/Bangladesh_Cricket_Board_Logo.svg/1200px-Bangladesh_Cricket_Board_Logo.svg.png" alt="Bangladesh" style="height: 170px;">
          <div class="card-body">
            <h5 class="card-title">India vs Bangladesh</h5>
            <p class="card-text">India will be facing Bangladesh in a 3 match ODI plus 2 T20 series from 23rd April to 15th May </p>
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/ICC_Cricket_World_Cup_2019_logo.svg/1200px-ICC_Cricket_World_Cup_2019_logo.svg.png" alt="World Cup" style="height: 170px;">
          <div class="card-body">
            <h5 class="card-title">Cricket World Cup</h5>
            <p class="card-text">Indian team will be participating in cricket world cup from 1st June to 30th July</p>
            <a href="#" class="btn btn-primary">More Info</a>
          </div>
        </div>
      </div>
    </div>
  </div>



<br><br>


  <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background-color: #f2f2f2;">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">About Us</h5>
          <p>This page helps it's users to pick a playig XI for any match<br>
             It takes information from the user regarding the match and depending<br>
             on the information provided by the user displays the best possible playing XI<br>
             The creators of this page are Tirth Parekh and Mridul Pandey.<br>
             Copyright 1999-2019 by Refsnes Data. All Rights Reserved.</p>

        </div>
  

        <hr class="clearfix w-100 d-md-none pb-3">

  
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Important Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">About Us</a>
              </li>
              <li>
                <a href="#!">Contact Us</a>
              </li>
              <li>
                <a href="#!">Our Vision</a>
              </li>
              <li>
                <a href="#!">Feedback</a>
              </li>
            </ul>

          </div>
          
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">More from the creators</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Song.com</a>
              </li>
              <li>
                <a href="#!">WWEIndia.com</a>
              </li>
              <li>
                <a href="#!">GrammarAcademy</a>
              </li>
              <li>
                <a href="#!">JEE</a>
              </li>
            </ul>

          </div>
    

      </div>
  

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> BCCI.com</a>
    </div>
    <!-- Copyright -->

  </footer>

  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</body>
</html>