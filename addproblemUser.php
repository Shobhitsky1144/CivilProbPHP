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
<!DOCTYPE html>
<html lang="en-US">
    <head>
        
       
        
        <?php include "header.php"; ?>
    </head>
    <body>
        
       <?php include "nav2.php";
echo "<b>Welcome </b><b style = 'color : green ; text-transform : capitalize'>$username</b>";
 ?>
       
    <div class = "container" style = "margin-top : 50px">			
<h1 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">ADD Problem</h1>
				
                                <form method="post" >

<div class="form-group col-xs-4">
<label>Problem Title<span style = "color : red" >*</span></label>
<input type="text" name="ptitle" class="form-control" required>

<label>Description<span style = "color : red">*</span></label>
<textarea name="pdesc" class="form-control" required></textarea>


<label>Problem Location<span style = "color : red">*</span></label>
<input type = text name="pplace" class="form-control" required>



<input type="submit" name="save"  value="Submit" class = "btn btn-primary" class="form-control"/>
</div>
</form>
</div>    
        
     
    </body>
</html>

<?php 

if(isset($_POST['save']))
{
$ptitle = $_POST['ptitle'];
$pdesc = $_POST['pdesc'];
$pdate = date("d-m-y");

$status = "pending";
$pplace = $_POST['pplace'];
$query="insert into problem(ptitle,pdesc,pdate,username,pplace,status) values('$ptitle','$pdesc','$pdate','$u','$pplace','$status')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location="notstartedUser.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong")</script>';
}
}

?>