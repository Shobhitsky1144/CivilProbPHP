


<!DOCTYPE html>
<html lang="en-US">
    <head>
        
       <meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content = "IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        
        <?php include "header.php" ?> 
        <style>
            .mydiv{
            height:300px;
             overflow-y: scroll;
                    }
        </style>
    </head>
    <body style = "background-color: white">
        <!-- Start Nagigation -->
        <?php include "nav1.php";

 ?> 
  <!-- End Navigation -->
    
  
            <div class="container" style = "margin-top:50px">
                <h2 class ="text-center" style = "font-family : 'Lucida Calligraphy' ; color : #8AC03C">View Problem Description</h2>
                <div class="row">
                    
                         <?php 
						 include "dbconfigure.php";
    $id = $_GET['id'];
	
	$query = "select * from problem where pid=$id";
    $rs = my_select($query);
?>

<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : green ; color : white' >
<tr>


<th>Problem Title</th>
<th>Description</th>


</tr>
</thead>

 <tbody >
    <?php
while($row = mysqli_fetch_array($rs))
{
    ?>
   
<tr class='table-warning'>
   
<td><?php echo $row[1] ?></td>


<td><?php echo $row[2] ?></td>
							
</tr>

<?php
}
?>
</tbody>
</table>
          
                </div>
            </div>
  
    </body>
</html>
