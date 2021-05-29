<?php 
$id = $_GET['id'];
include "dbconfigure.php";
$query = "delete from siteuser where aadharid=$id";
my_iud($query);
header("location:viewusersAdmin.php");
?>