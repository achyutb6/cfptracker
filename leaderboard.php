<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"sus");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_SESSION['sess_email'];

   $result = mysqli_query($conn,"SELECT name,round(sum(cfp),2) as sum from track,users where users.email = track.email group by users.email order by sum(cfp) desc ;");
   $table = mysqli_fetch_all($result,MYSQLI_ASSOC);
   $rank = 1;

 ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/editor.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Leaderboard</h3>
      </div>

        <table class="table">	
    	<tr>
			<th>Rank</th>
			<th>Name</th>
			<th>Total CFP Reduced</th>
		</tr>
		<?php
			foreach($table as $row){
				echo "<tr>";
				echo "<td>".$rank++."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sum']."</td>";
				echo "</tr>";
			}
		?>
	</table>
    </div>

    </div> <!-- /container -->
  

</body>
</html>