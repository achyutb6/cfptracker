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

 $car_em = floatval($_POST['car']) * 1.8;
 $public = floatval($_POST['public']) * 1.2;
 $wash = floatval($_POST['wash']) * 1.6;
 $waste = floatval($_POST['waste']) * 2 ;

   $chart = "['Task', 'CFP reduced (lbs)'],['Public transport', ".$public."],['Recycling', ".$waste."],['Home Energy', ".$wash."]";
   $total = $public + $wash + $waste;
   $result = mysqli_query($conn,"INSERT into track values('$email',CURDATE(),$total);");

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
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/editor.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="narrow-jumbotron.css" rel="stylesheet">
    <style type="text/css">
    	span{
font-size: 26px;
letter-spacing: 0.2px;
word-spacing: 2px;
font-weight: 700;
text-decoration: none;
font-style: italic;
font-variant: normal;
text-transform: none;
    	}
    </style>
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
        <h3 class="text-muted">Results</h3>
      </div>
      <p> You increased the footprint by <span><?php echo $car_em ?> lbs </span> but you decreased it by  <span><?php echo $public ?> lbs </span> because you used public transport.</p>

      <p> You reduced the footprint by <span><?php echo $wash ?> lbs </span> by washing your clothes in cold water. </p>

      <p> You reduced the footprint by <span><?php echo $waste ?> lbs </span> by recycling.</p>	
      </div>


      <div id="piechart"></div>
      
      <div class="container"> <a href="leaderboard.php" class="btn btn-success">Leaderboard</a></div>

    </div> <!-- /container -->

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  	<?php echo $chart ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Visualization', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>  

</body>
</html>

