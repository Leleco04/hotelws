<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="<?php echo e(asset('imgs/WSHR_ICON_32x32.png')); ?>">

    <title>Costs and Period - WorldSkills International Hotel Reservation</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/general.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/costs.css')); ?>" rel="stylesheet">
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
          <img id="WorldSkills_logo" src="<?php echo e(asset('imgs/WorldSkills_logo.png')); ?>" align="WorldSkills">
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
            <li><a href="hotel_list.html">Manage Hotels</a></li>
            <li class="active"><a href="costs_list.html">Manage Costs and Period <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Export Database</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="report.html">Accommodation Report</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Manage Costs and Period</h1>
            <div class="table-responsive">
                <form method="post">
                    <label for="gold">Gold*</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="gold" id="gold" value="80">
                        <span class="input-group-addon">.00</span>
                    </div>        
                    <label for="silver">Silver*:</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="silver" id="silver" value="67">
                        <span class="input-group-addon">.00</span>
                    </div> 
                    <label for="bronze">Bronze*:</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="bronze" id="bronze" value="55">
                        <span class="input-group-addon">.00</span>
                    </div>
                    <label for="period">Period*:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" aria-label="Period in days" name="period" id="period" value="10">
                        <span class="input-group-addon" id="basic-addon2">days</span>
                    </div>                     
                    <p>* mandatory fields</p>                          
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
<?php /**PATH C:\Users\Administrador\Desktop\system\hotel\resources\views/costs_list.blade.php ENDPATH**/ ?>