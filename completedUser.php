
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
<html>
    <head>
     
        
       <?php include "header.php"; ?>
        
        
        
<link rel=stylesheet type = text/css href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   



 <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
-->

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">       
  </script>
  <script>
  $(document).ready(function() {
    $("#example").dataTable();
  });
  </script>     
              
    </head>
    <body>
         <?php include "nav2.php";
echo "<b>Welcome </b><b style = 'color : green ; text-transform : capitalize'>$username</b>";
 ?>
        
        <div class="container">
				    <div class=row>
				        <div class="col-sm-12">
  <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">Problems-Completed</h2>



</div>
    
</div>
</div>
<?php 
  
  $rs = completed();
?>

<div class = container>
 
<div class = row>
<div class = col-sm-12>
<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : green ; color : white' >
<tr>


<th>Problem Title</th>
<th>Description</th>
<th>Post Date</th>


<th>Posted By</th>
<th>Location</th>
<th>Votes</th>
<th>Status</th>
<th>Start Date</th>
<th>Completion Date</th>
<th>Feedback</th>
</tr>
</thead>

 <tbody >
    <?php
while($row = mysqli_fetch_array($rs))
{
    ?>
   
<tr class='table-warning'>
   
<td><?php echo $row[1] ?></td>
<td><a style = "font-size : 10pt" href="viewdescription.php?id=<?php echo $row[0] ?>">View Description</a></td>
<td><?php echo $row[3] ?></td>
<td><?php echo $row[4] ?></td>
<td><?php echo $row[5] ?></td>
<td><?php echo getVote($row[0])?></td>
 <td><?php echo $row[7] ?></td> 
 <td><?php echo $row[10] ?></td> 
 
<td><?php echo $row[9] ?></td> 

<?php 
if(sendorview($u,$row[0])==1)
{
?>
<td><a style = "font-size : 10pt" href="viewmyfeedback.php?id=<?php echo $row[0] ?>">View Ur Feedback</a></td>
<?php
}
else
{
?>
<td><a style = "font-size : 10pt" href="sendfeedback.php?id=<?php echo $row[0] ?>">Send Feedback</a></td>
<?php
}														
?>
																					


																
												
</tr>

<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>



    </body>
</html>
