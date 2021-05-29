<html>
<head>

<?php include "header.php"; ?>
</head>
<body>
<?php include "nav3.php"; ?>

<div class="container" >
<h2 class="text-center" style = "margin-top : 30px ; color : #E6120E ; font-family : 'Monotype Corsiva'">View New User Request</h2>

<?php
include "dbconfigure.php"; 
$query = "select * from siteuser where status = 'Pending'";
$rs = my_select($query);

echo '<div class="table-responsive">
<table class="table table-hover">
<thead style = "background-color : green ; color : white">
<tr>
<th>AadharID</th>
<th>UserName</th>
<th>City</th>
<th>Address</th>
<th>Email ID</th>
<th>Contact</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>';
while($row=mysqli_fetch_array($rs))
{
echo "
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
<td>$row[5]</td>
<td>$row[7]</td>
<td><a class= 'btn btn-primary' href='assignstatus.php?id=$row[0]'>Assign Status</a></td>
";


}
echo '
</tbody>
</table>
</div>
';


?>

</div>
</body>
</html>
