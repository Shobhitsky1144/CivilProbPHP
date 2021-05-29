<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content = "IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel ="stylesheet" type ="text/css" href="bootstrap.min.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script type = text/javascript src="bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        
        <?php include "header.php" ?> 
    </head>
    <body>
        <?php include "nav2.php" ?> 
 
        
        <div class = "container" style = "margin-top : 100px">			
				<h1 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Start Work Now</h1>
				
                   <form method="post" >
                                        
<?php 

$id = $_GET["id"];
?>
<div class="form-group">
<label>Problem ID</label>
<input type="text" name="pid" value = "<?php echo $id ?>" class="form-control" readonly>

<div class="form-group">
<label>Estimated Completion Date</label>
<input type="date" name="estcompdate" class="form-control">

<input type="submit" value="Submit" name = "submit" class = "btn btn-primary" class="form-control"/>
</div>
</div>
</form>

        
        </div>   
        
    </body>
</html>
<?php 
include "dbconfigure.php";
$startdate = date('d-m-Y');
if(isset($_POST['submit']))
{
$estcompdate = $_POST['estcompdate'];
$query = "update problem set status = 'InProgress', estcompdate='$estcompdate',startdate='$startdate' where pid='$id'";
$n = my_iud($query);
header("location:notstartedAdmin.php");
}

?>
