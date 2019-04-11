
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title></title>


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
        <h3 class="text-muted">Update CFP</h3>
      </div>

      <div><h4> Annual U.S. Average CFP:
19,702lbs </h4></div>

     <div>
       <form class="form-horizontal" action="result.php" method="post">
        <fieldset>

        <!-- Form Name -->
        <legend>Transportation</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">How many miles did you drive today?</label>  
          <div class="col-md-4">
          <input id= "car" name="car" type="text" placeholder="In miles" class="form-control input-md">
          <span class="help-block">31 miles/day is about average in the United States per vehicle.</span>  
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">For how many miles did you use public transport today?</label>  
          <div class="col-md-4">
          <input id="public" name="public" type="text" placeholder="In miles" class="form-control input-md">
          </div>
        </div>

        <legend>Waste</legend>

        <div class="form-group">
        <label class="col-md-4 control-label" for="waste">How many of the following did you recycle today?</label>
        <ul><li>aluminum & steel cans</li>
        <li>plastic</li>
      <li>glass</li>
    <li>newspape</li>
  <li>magazines</li></ul>
        <div class="col-md-4">
          <select id="waste" name="waste" class="form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>

      <legend>Home Energy</legend>
        Did you wash your clothes in cold water today?
        <select id="wash" name="wash" class="form-control">
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
          <br>
          <input type="submit"/ class="btn btn-success">
        </fieldset>
        </form>

     </div>

      


    </div> <!-- /container -->
  

</body>
</html>