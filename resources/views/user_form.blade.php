<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>Users Form - WorldSkills International Hotel Reservation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/general.css" rel="stylesheet">
    <link href="css/users.css" rel="stylesheet">
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
            <li><a href="administrators.html">Home</a></li>
            <li class="active"><a href="user_list.html">Manage Users <span class="sr-only">(current)</span></a></li>
            <li><a href="hotel_list.html">Manage Hotels</a></li>
            <li><a href="costs_list.html">Manage Costs and Period</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Export Database</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="report.html">Accommodation Report</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Users Form</h1>
            <div class="table-responsive">
                <form method="post">
                    <label for="name">Name*:</label>
                    <div>
                        <input type="text" class="form-control" aria-label="Name of the user" name="name" id="name">
                    </div>        
                    <label for="email">E-mail*:</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" aria-label="E-mail" name="email" id="email">
                    </div> 
                    <label for="password">Password**:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" aria-label="Password" name="password" id="password">
                    </div>              
                    <label for="confirm">Confirm Password**:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" aria-label="Password Confirmation" name="confirm" id="confirm">
                    </div>
                    <label for="picture">Picture*:</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="picture" aria-describedby="picturehelp">
                        <small id="picturehelp" class="form-text text-muted">Only JPG format, maximum 500Kb.</small>
                    </div>   
                    <label for="profile">Profile*:</label>
                    <select class="form-control" id="profile" name="profile">
                        <option selected>Select</option>
                        <option value="Administrators">Administrators</option>
                        <option value="Technical Delegates">Technical Delegates</option>
                    </select>                                          
                    <label for="member">Member*:</label>
                    <select class="form-control" id="member" name="member">
                        <option selected>Select</option>
                        <option value="AR">AR - Argentina</option>
                        <option value="AM">AM - Armenia</option>
                        <option value="...">...</option>
                    </select>                                                                           
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
