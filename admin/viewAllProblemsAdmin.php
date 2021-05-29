

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
	<?php include "header.php"; ?>
     <?php include "nav3.php";  ?>
        
        <div class="container">
				    <div class=row>
				        <div class="col-sm-12">
  <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">View All Problems</h2>



</div>
    
</div>
</div>
<?php 
  include "dbconfigure.php";
  $rs = allproblems();
?>


<div class = container>
 
<div class = row>
<div class = col-sm-12>
<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : green ; color : white' >
<tr>


<th>Problem_Title</th>
<th>Description</th>
<th>Post Date</th>


<th>Posted By</th>
<th>Location</th>
<th>Votes</th>
<th>Status</th>
<th>Work_Start_Date</th>
<th>Estimated_Completion_Date</th>
<th>Actual_Completion_Date</th>

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
 <td><?php echo $row[8] ?></td> 
 <td><?php echo $row[9] ?></td> 
<td><?php echo $row[10] ?></td> 

										
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
