<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>Reservation Form - WorldSkills International Hotel Reservation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/general.css" rel="stylesheet">
    <link href="css/delegates.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img id="WorldSkills_logo" src="images/WorldSkills_logo.png" align="WorldSkills">
          <a class="navbar-brand" href="#"> WorldSkills Hotel Reservation</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="delegates.html">Home <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Reservation Form - San Marino Plaza Hotel</h1>
            <div class="table-responsive">
                <form method="post">
                    <label for="single">Reserved SINGLE rooms:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-label="Number of available SINGLE rooms*" name="single" id="single" value="10">
                    </div>    
                    <label for="doubble">Reserved DOUBLE rooms:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-label="Number of available DOUBLE rooms*" name="double" id="double">
                    </div>  
                    <label for="triple">Reserved TRIPLE rooms:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-label="Number of available TRIPLE rooms*" name="triple" id="triple" value="5">
                    </div>                                                                                           
                    <p>* mandatory fields<br/>** mandatory in some cases</p>                           
                </form>
            </div>
            <button type="button" class="btn btn-default" aria-label="Save">
                <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Save
            </button>         
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
