<?php 
ob_start();
session_start();
$userid = $_SESSION['sun'];
$pid = $_GET['id'];
?>
 <!DOCTYPE html>
<html lang="en-US">
    <head>
        
       
        <?php include "header.php" ?> 
    </head>
    <body>
        
        <?php include "nav2.php" ?>   
       
    <div class = "container" style = "margin-top : 50px">			
				<h1 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Send Feedback</h1>
				
                                <form method="post">

<div class="form-group col-xs-4">
<label>Feedback Message<span style = "color : red" >*</span></label>
<textarea name="msg" class="form-control" required></textarea>
<br>
<input type="submit" style = "width : 200px" name="submit"  value=" Submit " class = "btn btn-primary" class="form-control"/>
</div>
</form>
</div>         
    </body>
</html>
<?php 
include "dbconfigure.php" ;
if(isset($_POST["submit"]))
{
$msg=$_POST['msg'];
$fdate= date("d-m-y");


$query="insert into feedback(msg,username,fdate,pid) values('$msg','$userid','$fdate','$pid')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Feedback Sent Successfully");
window.location="completedUser.php";
</script>';
}
else
{
echo '<script>alert("Something Went Wrong")</script>';
}
}

?>

