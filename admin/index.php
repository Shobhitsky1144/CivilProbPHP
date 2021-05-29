<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,inital-scale=1">
<link rel="stylesheet" type = text/css href="bootstrap.min.css">
<script src = "bootstrap.min.js"></script>
<?php include "header.php"; ?>
</head>
<body>
<?php include "nav2.php"; ?>

<div class="container" style = "margin-top : 50px">
<h1 class=text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Admin Login</h1>
<form method=post>
<div class="form-group">
<label><b>Admin Name</b></label>
<input type=text class="form-control" name="adminname">

<label><b>Password</b></label>
<input type=password class="form-control" name="password">
<input type = checkbox name=rem>Remember Me
<br>
<input type = submit value=Login name = "login" class="btn btn-primary" style = "width : 200px">
</div>
</form>
</div>
</body>
</html>
<?php 
session_start();
include "dbconfigure.php";

if(isset($_POST['login']))
{
$adminname = $_POST['adminname'];
$password = $_POST['password'];

if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}

$query = "select count(*) from admin where adminname='$adminname' and password='$password'";

$n = my_one($query);
if($n == 1)
{
$_SESSION['sun'] = $adminname;
$_SESSION['spwd'] = $password;

if($remember=='yes')
{
setcookie('cun',$adminname,time()+60*60*24*7);
setcookie('cpwd',$password,time()+60*60*24*7);
}
header("Location:admin_home.php");

}
else
{
echo '<script>alert("Invalid Login Credentials , Try Again");</script>';
}
}
?>
