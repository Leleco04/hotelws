<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>Dashboard Delegates - WorldSkills International Hotel Reservation</title>

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
          <h1 class="page-header">Associated Hotels</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="delegates_form.html"><img src="images/sammarino.jpg" width="200" height="200" class="img-responsive" alt="San Marino Plaza Hotel"></a>
              <h4>San Marino Plaza Hotel</h4>
              <span class="text-muted">Bronze</span>
              <span class="text-muted reserve">Silgle: 100/10</span>
              <span class="text-muted reserve">Double: 100/0</span>
              <span class="text-muted reserve">Triple: 100/5</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="delegates_form.html"><img src="images/hilton.jpg" width="200" height="200" class="img-responsive" alt="Hilton Plaza"></a>
              <h4>Hilton Plaza</h4>
              <span class="text-muted">Gold</span>
              <span class="text-muted reserve">Silgle: 100/10</span>
              <span class="text-muted reserve">Double: 100/0</span>
              <span class="text-muted reserve">Triple: 100/5</span>              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="delegates_form.html"><img src="images/conrad.jpg" width="200" height="200" class="img-responsive" alt="Conrad Lux Hotel"></a>
              <h4>Conrad Lux Hotel</h4>
              <span class="text-muted">Silver</span>
              <span class="text-muted reserve">Silgle: 100/10</span>
              <span class="text-muted reserve">Double: 100/0</span>
              <span class="text-muted reserve">Triple: 100/5</span>              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="delegates_form.html"><img src="images/pinhal.jpg" width="200" height="200" class="img-responsive" alt="Pinhal Accord Hotel"></a>
              <h4>Pinhal Accord Hotel</h4>
              <span class="text-muted">Silver</span>
              <span class="text-muted reserve">Silgle: 100/10</span>
              <span class="text-muted reserve">Double: 100/0</span>
              <span class="text-muted reserve">Triple: 100/5</span>              
            </div>
          </div>

          <h2 class="sub-header">Delegation Numbers</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Number of participants of the respective delegation with accommodation reserved</td>
                  <td class="text-right">100</td>
                </tr>
                <tr>
                  <td>Costs of Accommodation for the respective delegation</td>
                  <td class="text-right">10,350.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
