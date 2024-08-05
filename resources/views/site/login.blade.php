<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="WorldSkills International Hotel Reservation">
    <meta name="author" content="External Writer">
    <link rel="icon" href="images/WSHR_ICON_32x32.png">

    <title>WorldSkills International Hotel Reservation - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="{{route('site.login')}}" method="POST">
        @csrf
        <div id="logo">
          <img id="ws_icon" src="{{asset('imgs/worldskills_red_RGB.png')}}" alt="WorldSkills">
          <img id="logo_icon" src="{{asset('imgs/WSHR_ICON.png')}}" alt="WSHR">
          <h1>WorldSkills International Hotel Reservation</h1>
        </div>  
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>