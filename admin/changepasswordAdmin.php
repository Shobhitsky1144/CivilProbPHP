<?php 
session_start();

 

include "dbconfigure.php";
if(verifyuser())
{
	$u = $_SESSION['sun'];
	
	
}
else
{
header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
         
        
        <?php include "header.php" ?> 
    </head>
    <body>
        <?php include "nav3.php" ?> 
 
        
        <div class="container" style = "margin-top:70px">
<h2 class="text-center" style = "font-family : Monotype Corsiva ; color : red">Change Password</h2>
<br>
<form method = post>
<label><b>Old Password</b></label>
<input class = "form-control" style = "color : purple" type = password name = oldpassword>

<label><b>New Password</b></label>
<input class = "form-control" style = "color : purple" type = password name = newpassword>
<label><b>Confirm Password</b></label>
<input class = "form-control" type = password style = "color : purple" name = cpassword>
<br>
<input type = submit value = "Submit" name = submit class="btn btn-primary">
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$cpassword = $_POST['cpassword'];

if($newpassword==$cpassword)
{

$query = "update admin set password='$newpassword' where adminname='$u' and password='$oldpassword'";
$n = my_iud($query);
if($n ==1)
{
echo '<script>alert("Password Updated Successfully");
window.location = "index.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again!")</script>';
}	

}
else
{
echo '<script>alert("Password and Confirm Password Not Match");
</script>';
}


}
?>
