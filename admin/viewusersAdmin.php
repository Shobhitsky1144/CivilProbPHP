
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
        <?php include "nav3.php"; ?> 
        
        <div class="container">
				    <div class=row>
				        <div class="col-sm-12">
  <h2 class = text-center style = "font-family : 'Monotype Corsiva' ; color : #E6120E">View All Users</h2>



</div>
    
</div>
</div>
  <?php 
  include "dbconfigure.php";
  $query = "select * from siteuser";
  
  $rs = my_select($query);
  
?>


<div class = container>
 
<div class = row>
<div class = col-sm-12>
<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : green ; color : white' >
<tr>


<th>Aadhar ID</th>
<th>UserName</th>
<th>City</th>


<th>Address</th>
<th>EmailID</th>
<th>Contact Number</th>
<th>Status</th>
<th>Remove</th>
</tr>
</thead>

 <tbody >
    <?php
while($row = mysqli_fetch_array($rs))
{
    ?>
   
<tr class='table-warning'>

<td><?php echo $row[0] ?></td>
<td><?php echo $row[1] ?></td>
<td><?php echo $row[2] ?></td>
<td><?php echo $row[3] ?></td>
<td><?php echo $row[4] ?></td>
<td><?php echo $row[5] ?></td>
 <td><?php echo $row[7] ?></td> 

<td><a class = "btn btn-danger" style = "font-size : 10pt" href="deleteUserAdmin.php?id=<?php echo $row[0] ?>">Delete</a></td>
																					


																
												
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