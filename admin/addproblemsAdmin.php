<?php 
session_start();
$u = $_SESSION['sun'];
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        
       
        
        <?php include "header.php" ?> 
    </head>
    <body>
        
        <?php include "nav3.php" ?>   
       
    <div class = "container" style = "margin-top : 50px">			
				<h1 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">ADD Problem</h1>
				
                                <form method="post">

<div class="form-group col-xs-4">
<label>Problem Title<span style = "color : red" >*</span></label>
<input type="text" name="ptitle" class="form-control" required">

<label>Description<span style = "color : red">*</span></label>
<textarea name="pdesc" class="form-control" required></textarea>


<label>Problem Location<span style = "color : red">*</span></label>
<input type = text name="pplace" class="form-control" required>

<label>Start Date<span style = "color : red">*</span></label>
<input type = "date" name="startdate" class="form-control" required>

<label>Estimated Completion Date<span style = "color : red">*</span></label>
<input type = "date" name="estcompdate" class="form-control" required>

<input type="submit" name="save"  value="Submit" class = "btn btn-primary" class="form-control"/>
</div>
</form>
</div>         
    </body>
</html>
<?php 
include "dbconfigure.php";
if(isset($_POST['save']))
{
$ptitle = $_POST['ptitle'];
$pdesc = $_POST['pdesc'];
$pdate = date("d-m-y");

$status = "InProgress";
$pplace = $_POST['pplace'];
$startdate = $_POST['startdate'];
$estcompdate = $_POST['estcompdate'];
$query="insert into problem(ptitle,pdesc,pdate,username,pplace,status,startdate,estcompdate) values('$ptitle','$pdesc','$pdate','$u','$pplace','$status','$startdate','$estcompdate')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Record Saved Successfully");
window.location="inprogressAdmin.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong")</script>';
}
}

?>
