<?php 
session_start();
?>

<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,inital-scale=1">
<link rel="stylesheet" type = text/css href="bootstrap.min.css">
<script src = "bootstrap.min.js"></script>
<?php include "header.php"; ?>
</head>
<body>
<?php include "nav1.php"; ?>

<div class="container" style = "margin-top : 50px">
<h1 class=text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">User Login</h1>
<form method=post>
<div class="form-group">
<label><b>Aadhar ID</b></label>
<input type=text class="form-control" name="aadharid">

<label><b>Password</b></label>
<input type=password class="form-control" name="password">
<input type = checkbox name = rem>Remember me
<br>
<input type = submit name = "login" value=Login class="btn btn-primary" style = "width : 200px">

</div>
</form>
</div>

</body>
</html>
<?php 
include "dbconfigure.php";
if(isset($_POST['login']))
{
$aadharid = $_POST['aadharid'];
$password = $_POST['password'];
if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}
$query = "select count(*) from siteuser where aadharid='$aadharid' and password='$password' and status='Accept'";
$ans = my_one($query);
if($ans == 1)
{
$_SESSION['sun'] = $aadharid;
$_SESSION['spwd'] = $password;

if($remember = 'yes')
{
setcookie('cun',$aadharid,time()+60*60*24*7);
setcookie('cpwd',$password,time()+60*60*24*7);
}
header("location:user_home.php");
}

else
{
echo '<script>alert("Invalid Login Credentials , Try Again!")</script>';
}
}
?>