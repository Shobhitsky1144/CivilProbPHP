<?php 
session_start();
$u = $_SESSION['sun'];
include 'dbconfigure.php';
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        
        
        
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
        <?php include "nav3.php";?>

  <!-- End Navigation -->
    
  
            <div class="container" style = "margin-top:50px">
                <h2 class ="text-center" style = "font-family : 'Lucida Calligraphy' ; color : #8AC03C">View Problem Description</h2>
                <div class="row">
                    
                         <?php 
    $id = $_GET['id'];
	
	$query = "select * from problem where pid=$id";
    $rs = my_select($query);
?>

<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : green ; color : white' >
<tr>


<th>Problem_Title</th>
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
