
<?php
ob_start();
$id = $_GET['id'];
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
				<h1 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Assign Completion Date[If Completed]</h1>
				
                   <form method="post">
                                      

<div class="form-group">
<label>Problem ID</label>
<input type="text" name="pid" value = "<?php echo $id ?>" class="form-control" readonly>

<div class="form-group">
<label>Actual Completion Date</label>
<input type="date" name="actcompdate" class="form-control">

<input type="submit" value="Submit" name = submit class = "btn btn-primary" class="form-control"/>
</div>
</div>
</form>

        
        </div>   
        
    </body>
</html>
       
<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$actcompdate = $_POST['actcompdate'];

$query = "update problem set actcompdate = '$actcompdate' , status='Completed' where pid=$id";
$n = my_iud($query);
header("location:inprogressAdmin.php");
}
?>    