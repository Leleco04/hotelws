<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>Users List - WorldSkills International Hotel Reservation</title>

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
          <h1 class="page-header">Users List</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Member</th>
                  <th>Profile</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>José Soares Marino</td>
                  <td>marino@semic.com.ar</td>
                  <td>AR - Argentina</td>
                  <td>Technical Delegates</td>
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
                  <td>Peter Nilssen</td>
                  <td>peter.nilssen@gmail.com</td>
                  <td>CA - Canada</td>
                  <td>Technical Delegates</td>
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
                  <td>Robert Paul Andersen</td>
                  <td>rpa.gmail.com</td>
                  <td>IE - Ireland</td>
                  <td>Technical Delegates</td>
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
                  <td>Marina Paulist</td>
                  <td>paulist@estoniamail.com</td>
                  <td>EE - Estonia</td>
                  <td>Technical Delegates</td>
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
                  <td>Maria Herrera</td>
                  <td>mherrera@conalef.com.jm</td>
                  <td>JM - Jamaica</td>
                  <td>Technical Delegates</td>
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
                  <td>José Leitão</td>
                  <td>leitao@cni.org.br</td>
                  <td>BR- Brazil</td>
                  <td>Technical Delegates</td>
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
                  <td>Administrator</td>
                  <td>admin@worldskills.org</td>
                  <td>WS - WorldSkills International</td>
                  <td>Administrators</td>
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
                  <td>Marcelo Strehl</td>
                  <td>marcelo.strehl@gmail.com</td>
                  <td>WS - WorldSkills International</td>
                  <td>Administrators</td>
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
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New User
            </button>         
        </div>
      </div>
    </div>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
