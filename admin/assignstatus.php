<?php 
$id = $_GET['id']; 
?>
<html>
<head>

<?php include "header.php"; ?>
</head>
<body>
<?php include "nav3.php"; ?>

<div class="container" >
<h2 class="text-center" style = "margin-top : 30px ; color : #E6120E ; font-family : 'Monotype Corsiva'">Assign Status</h2>

<form method=post>
<div class="form-group">
<label>Aadhar ID</label>
<input type = text class = "form-control" readonly name=aadharid value='<?php echo $id ?>'>

<label>Status</label>
<select name=status class=form-control>
<option value = "Accept">Accept</option>
<option value = "Reject">Reject</option>
</select>
<br>
<br>
<input type = submit value="Submit" name=submit class="btn btn-primary form-control">
</div>
</form>

</div>
</body>
</html>
<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$status = $_POST['status'];
$query = "update siteuser set status = '$status' where aadharid='$id'";
my_iud($query);
header("location:newuserrequest.php");
}
?>