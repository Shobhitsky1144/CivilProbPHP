
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" style="background-color : blueviolet">
<a href="index.php" class="navbar-brand">Civil Problem Resolution</a>

<button type = button class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="mymenu">
<ul class="navbar-nav pl-5 custom-nav">
<li class="nav-item"><a href="admin_home.php" class="nav-link" style="color : white">Home</a></li>


<li class="nav-item"><a href="newuserrequest.php" class="nav-link" style="color : white">NewUserRequest</a></li>


<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" style = "color : white">
       View Problems
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="notstartedAdmin.php" style = "color : black">Problems NotStarted</a>
        <a class="dropdown-item" href="inprogressAdmin.php" style = "color : black">Problems InProgress</a>
		<a class="dropdown-item" href="completedAdmin.php" style = "color : black">Problems Completed</a>
        <a class="dropdown-item" href="viewAllProblemsAdmin.php" style = "color : black">View All Problems</a>
      </div>
    </li>


<li class="nav-item"><a href="addproblemsAdmin.php" class="nav-link" style="color : white">ADD Problem</a></li>

<li class="nav-item"><a href="viewusersAdmin.php" class="nav-link" style="color : white">View Users</a></li>

<li class="nav-item"><a href="changepasswordAdmin.php" class="nav-link" style="color : white">Change Password</a></li>



<li class="nav-item"><a href="logout.php" class="nav-link" style="color : white">Logout</a></li>
</ul>
</div>
</nav>

<div class="container-fluid" style = "background-color:#F7F7F7">
<div class="container" style = "margin-top:50px">
<div class="row">
<div class="col-sm-4">
<img src = "images/logoCivilProb.jpg" class="img-responsive">
</div>
<div class="col-sm-8" style = "margin-top:50px">
<h1 style = "color : #E6120E ; font-family : 'Monotype Corsiva'">Civil Problem Resolution</h1>
</div>
</div>
</div>
</div>
</body>
</html>