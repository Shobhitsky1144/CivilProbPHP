<?php
include "dbconfigure.php";
       
        $userid =$_GET['userid'];
        $pid =$_GET['pid'];
               
	voteNow($userid,$pid);
    header("location:notstartedUser.php");

?>