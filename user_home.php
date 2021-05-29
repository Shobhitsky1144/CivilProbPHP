<?php 
session_start();
include "dbconfigure.php";
if(verifyuser())
{
	$u = $_SESSION['sun'];
	$query = "select * from siteuser where aadharid='$u'";
	$rs = my_select($query);
	while($row=mysqli_fetch_array($rs))
	{
	$username = $row[1];
	$city = $row[2];
	$address = $row[3];
	$emailid = $row[4];
	$contact = $row[5];
	
	}
	
}
else
{
header("location:index.php");
}
?>
<html>
<head>

<?php include "header.php"; ?>
</head>
<body>
<?php include "nav2.php";
echo "<b>Welcome </b><b style = 'color : green ; text-transform : capitalize'>$username</b>";
 ?>

 
 <div class = container>
     


<div class='table-responsive'>
<table class='table table-hover table-borderless'>
 
  <tr><th>AadharID</th> <td><?= $u ?></td></tr>
<tr><th>UserName</th> <td><?= $username ?></td></tr>
<tr><th>City</th> <td><?= $city ?></td></tr>
<tr><th>Address</th> <td><?= $address ?></td></tr>
<tr><th>Email ID</th> <td><?= $emailid ?></td></tr>
<tr><th>Contact Number</th> <td><?= $contact ?></td></tr>

</table>

    <a href="editprofile.php?uid=<?=$u?>" class="btn btn-primary">Edit Profile</a>



</div>
 
 
 
</body>
</html>