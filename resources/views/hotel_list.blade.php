<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>Hotels List - WorldSkills International Hotel Reservation</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/general.css')}}" rel="stylesheet">
    <link href="css/hotel.css" rel="stylesheet">
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
          <img id="WorldSkills_logo" src="{{asset('imgs/worldskills_logo.png')}}" align="WorldSkills">
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
            <li><a href="user_list.html">Manage Users</a></li>
            <li class="active"><a href="hotel_list.html">Manage Hotels <span class="sr-only">(current)</span></a></li>
            <li><a href="{{route('hotel.costs')}}">Manage Costs and Period</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Export Database</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="report.html">Accommodation Report</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Hotels List</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Hotel Name</th>
                  <th>Category</th>
                  <th>Single</th>
                  <th>Double</th>
                  <th>Triple</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>San Marino Plaza Hotel</td>
                  <td>Bronze</td>
                  <td>20</td>
                  <td>30</td>
                  <td>100</td>
                  <td>
                    <button type="button" class="btn btn-default" aria-label="Edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>                    
                  </td>
                </tr>
                <tr>
                  <td>Hilton Plaza</td>
                  <td>Gold</td>
                  <td>50</td>
                  <td>20</td>
                  <td>40</td>
                  <td>
                    <button type="button" class="btn btn-default" aria-label="Edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button> 
                  </td>
                </tr>
                <tr>
                  <td>Conrad Lux Hotel</td>
                  <td>Silver</td>
                  <td>30</td>
                  <td>30</td>
                  <td>60</td>
                  <td>
                    <button type="button" class="btn btn-default" aria-label="Edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button> 
                  </td>
                </tr>
                <tr>
                  <td>Pinhal Accord Hotel</td>
                  <td>Silver</td>
                  <td>50</td>
                  <td>50</td>
                  <td>100</td>
                  <td>
                    <button type="button" class="btn btn-default" aria-label="Edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>                       
                  </td>
                </tr>                              
              </tbody>
            </table>
          </div>
            <button type="button" class="btn btn-default" aria-label="Insert">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New Hotel
            </button>         
        </div>
      </div>
    </div>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
