
<!DOCTYPE html>
<html>
    <head>
         
        
        <?php include "header.php" ?> 
    </head>
    <body>
        <?php include "nav2.php" ?> 
 
 
 
 
 
 <div class = container style = "margin-top : 100px">
     <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">View Ur Feedback</h2>
<?php 
session_start();
include "dbconfigure.php";
$aadharid = $_SESSION['sun'];
$pid=$_GET["id"];
   $rs = myfeedback($aadharid,$pid);
?>

<div class='table-responsive'>
<table class='table table-hover table-borderless'>
    <?php
  
while($row = mysqli_fetch_array($rs))
{ 
  ?>  
 
<tr><th>Feedback Message</th> <td><?php echo $row[1] ?></td></tr>


<?php 
}
?>
</table>

    <a href="editmyfeedback.php?pid=<?php echo $pid ?>" class="btn btn-primary">Edit Feedback</a>
	
</div>
 
    </body>
</html>
