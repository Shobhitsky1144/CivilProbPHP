<?php 

session_start();
$userid = $_SESSION['sun'];

?>
<!DOCTYPE html>
<html>
    <head>
         
        
        <?php include "header.php" ?> 
    </head>
    <body>
        <?php include "nav2.php" ?> 
 
 
 
 
 
 <div class = container style = "margin-top : 100px">
     <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Edit Feedback</h2>
<?php 
include "dbconfigure.php";

$pid=$_GET["pid"];
   $rs = myfeedback($userid,$pid);
?>

<div class='table-responsive'>
<table class='table table-hover table-borderless'>
    <?php
  
while($row = mysqli_fetch_array($rs))
{ 
  ?>  
 <form method = post>
<tr><th>Feedback Message</th> <td><input type = text name = msg value="<?php echo $row[1] ?>"></td></tr>


<?php 
}
?>
</table>

    <input type = submit value=" Edit " class="btn btn-primary" name=edit>
	</form>
</div>
 
    </body>
</html>

<?php 
if(isset($_POST['edit']))
{
$msg = $_POST['msg'];
$query = "update feedback set msg='$msg' where pid=$pid and username='$userid'";
my_iud($query);
header("location:viewmyfeedback.php?id=".$pid);
}
?>