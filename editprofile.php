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
<h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Edit Profile</h2>

<div class='table-responsive'>
<table class='table table-hover table-borderless'>
 
<form method = post>
    
    <tr><th>Aadhar ID</th> <td><input type = text name = 'aadharid' value = "<?= $u?>" readonly></td></tr>
<tr><th>UserName</th> <td><input type = text name = 'username' value = "<?= $username?>"></td></tr>
<tr><th>City</th> <td><input type = text name = 'city' value = "<?=$city?>"></td></tr>
<tr><th>Address</th> <td><input type = text name = 'address' value = "<?=$address ?>"></td></tr>
<tr><th>Email ID</th> <td><input type = email name = 'emailadd' value = "<?=$emailid?>"></td></tr>
<tr><th>Contact Number</th> <td><input type = text name = 'contactno' value = "<?=$contact?>"></td></tr>

</table>
<input type = submit value = "Submit" class="btn btn-primary" name="edit"></form>


</div>
 </div>
 
 
 
 
    </body>
</html>

<?php 
if(isset($_POST['edit']))
{
	
	$username = $_POST['username'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$emailadd = $_POST['emailadd'];
	$contactno = $_POST['contactno'];
	
	$query = "update siteuser set username='$username',city='$city',address='$address',emailid='$emailadd',contact='$contactno' where aadharid='$u'";
	my_iud($query);
	header("location:user_home.php");
}
?>

