<!DOCTYPE html>
<html>
<head>
	<title>Update Bowler</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style type="text/css">
   
  :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

  </style>

</head>
<body>

	<br><br>
	<center><h1 style="font-family: 'Comic Sans MS', cursive, sans-serif;">Enter the details of the bowler </h1></center>
	<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Enter details here</h5>
            <form class="form-signin" method="POST" action="update_bowl.php">
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required autofocus>
                <label for="inputName">Name</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputType" class="form-control" placeholder="Bowler Type" name="type" required>
                <label for="inputType">Bowler Type</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputEconomy" class="form-control" placeholder="Economy" name="economy" step=".01" required>
                <label for="inputEconomy">Economy</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputWpm" class="form-control" placeholder="Wickets per Match" step=".01" name="wicketspm" required>
                <label for="inputWpm">Wickets per Match</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputMatches" class="form-control" placeholder="Matches" name="matches" required>
                <label for="inputMatches">No of Matches</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputFW" class="form-control" placeholder="Five Wickets" name="fivewickets" required>
                <label for="inputFW">Number matches with 5 wickets</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputPlayerForm" class="form-control" placeholder="Player Form" name="playerForm" step=".01" required>
                <label for="inputPlayerForm">Bowler Form</label>
              </div>

              <div class="form-label-group">
                <input type="number" id="inputInjury" class="form-control" placeholder="Player Injured" name="Injury" required>
                <label for="inputInjury">Enter 1 if player injured else enter 0</label>
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enter</button>
              <br>
              <a href="front.php"><button class="btn btn-lg btn-primary btn-block text-uppercase" type="button">Go Back</button></a>
              

              <?php


                if(isset($_POST['name']) && isset($_POST['economy']))
                {
                  $conn = mysqli_connect('localhost','root','','project');
                  if (!$conn)
                  {
                    die("Connection Failed");
                  }
                  else
                  {
                    $name = $_POST["name"];
                    $type = $_POST["type"];
                    $economy = $_POST["economy"];
                    $wicketspm = $_POST["wicketspm"];
                    $matches = $_POST["matches"];
                    $fivewickets = $_POST["fivewickets"];
                    $playerForm = $_POST["playerForm"];
                    $Injury = $_POST["Injury"];


                    $sql = "UPDATE project.bowler SET Bowl_Type='$type',Economy=$economy,Wickets_per_match=$wicketspm,Matches=$matches,5w=$fivewickets,Bowl_Form=$playerForm,Is_Injured=$Injury where Bowler_Name='$name' ";



                    echo 'Entering the values.....';

                    if(!mysqli_query($conn,$sql))
                    {
                      echo 'Value Could not be inserted';
                    }
                    else
                    {
                      echo 'Value Inserted successfully !!';
                    }

                    
                  }
                }
?>


              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>