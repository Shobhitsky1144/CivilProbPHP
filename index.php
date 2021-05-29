<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width,inital-scale=1">
<link rel="stylesheet" type = text/css href="bootstrap.min.css">
<script src = "bootstrap.min.js"></script>
<?php include "header.php"; ?>
<style>
            .mydiv{
            height:300px;
             overflow-y: scroll;
                    }
        </style>
</head>
<body style = "background-color: white">
        <!-- Start Nagigation -->
       <?php include "nav1.php"; ?>
  <!-- End Navigation -->
    <marquee behavior="alternate" bgcolor = "" style = "color : #E21410"><p><b>Login To Access All The Features</b></p></marquee>
  
            <div class="container" style = "margin-top:50px">
                <div class="row">
                    <div class="col-sm-6 mydiv">
					
                         <?php 
						 include "dbconfigure.php";
						 
		$rs = allProblemsAdmin();
?>

<div class='table-responsive'>
<table class='table table-hover table-sm' style = 'overflow: scroll' id="example" class="display" style="width:100%">
<thead style = 'background-color : blueviolet ; color : white' >
<tr>


<th>Problem Title</th>
<th>Description</th>
<th>PostDate</th>


<th>PostedBy</th>
<th>Location</th>
<th>Votes</th>
<th>Status</th>
<th>StartDate</th>
<th>EstimatedCompletionDate</th>
<th>ActualCompletionDate</th>

</tr>
</thead>

 <tbody >
    <?php
while($row = mysqli_fetch_array($rs))
{
    ?>
   
<tr class='table-warning'>
   
<td><?php echo $row[1] ?></td>
<td><a style = "font-size : 10pt" href="viewdescription1.php?id=<?php echo $row[0] ?>">View Description</a></td>

<td><?php echo $row[3] ?></td>
<td><?php echo $row[4] ?></td>
<td><?php echo $row[5] ?></td>
<td><?php echo getVote($row[0]); ?></td>
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
                    <div class="col-sm-6">
                        <a href="login.php" class="btn btn-outline-primary btn-block">ADD PROBLEM</a>  
                        <br><br><a href="login.php" class="btn btn-outline-primary btn-block">PROBLEMS IN PROGRESS</a>  
                          <br><br><a href="login.php" class="btn btn-outline-primary btn-block">PROBLEMS COMPLETED</a> 
                         <br> <br><a href="login.php" class="btn btn-outline-primary btn-block">SEND FEEDBACK</a>  
                    </div>
                </div>
            </div>
  
    </body>
</html>