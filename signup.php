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
<h1 class=text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">SignUp</h1>
<form method=post>
<div class="form-group">
<label><b>Aadhar ID</b></label>
<input type=text class="form-control" name="aadharid" required placeholder=AadharNumber>

<label><b>UserName</b></label>
<input type=text class="form-control" name="username" required placeholder="Your Name">

<label><b>City</b></label>
<input type=text class="form-control" name="city" required placeholder="City">

<label><b>Address</b></label>
<textarea class="form-control" name="address" required placeholder="Full Address"></textarea>

<label><b>Email ID</b></label>
<input type=email class="form-control" name="emailid" required placeholder="Your Email Address">

<label><b>Contact Number</b></label>
<input type=text class="form-control" name="contact" required placeholder="Your Contact Number">

<label><b>Password</b></label>
<input type=password class="form-control" name="password" required placeholder="Password">

<label><b>Confirm Password</b></label>
<input type=password class="form-control" name="confirmpwd" required placeholder="Password Again">
<br>
<input type = submit value=SignUp name=signup class="btn btn-primary" style = "width : 200px">
</div>
</form>
</div>
</body>
</html>
<?php 
include "dbconfigure.php";
if(isset($_POST['signup']))
{
$aadharid = $_POST['aadharid'];
$username = $_POST['username'];
$city = $_POST['city'];
$address = $_POST['address'];
$emailid = $_POST['emailid'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$confirmpwd = $_POST['confirmpwd'];
$status = "Pending";


$query = "insert into siteuser values('$aadharid','$username','$city','$address','$emailid','$contact','$password','$status')";


$n = my_iud($query);
if($n==1)
{
echo '<script>alert("SignUp Successfull");
window.location = "login.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong Try Again");
</script>';
}
}
?>