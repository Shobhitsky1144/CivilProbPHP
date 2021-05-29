<?php 
$dbserver = "127.0.0.1";//localhost
$dbuser = "root";
$dbpwd = "";
$dbname = "civilprobphp";

function my_iud($query)//insert , update and delete
{
global $dbserver , $dbuser , $dbpwd , $dbname;
$cid = mysqli_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");
mysqli_select_db($cid,$dbname);
mysqli_query($cid,$query);
$n = mysqli_affected_rows($cid);
mysqli_close($cid);
return $n;
}

function my_select($query)//select(search)
{
global $dbserver , $dbuser , $dbpwd , $dbname;
$cid = mysqli_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");
mysqli_select_db($cid,$dbname);
$rs = mysqli_query($cid,$query);
mysqli_close($cid);
return $rs;
}
//to be used when sql query returns a single value
function my_one($query)
{
global $dbserver , $dbuser , $dbpwd , $dbname;
$cid = mysqli_connect($dbserver,$dbuser,$dbpwd) or die("Connection Failed");
mysqli_select_db($cid,$dbname);
$rs = mysqli_query($cid,$query);
$row = mysqli_fetch_array($rs);
mysqli_close($cid);
return $row[0];
}


function verifyuser()
{
$u = "";
$p = "";
if(isset($_COOKIE['cun']) && isset($_COOKIE['cpwd']))
{
$u = $_COOKIE['cun'];
$p = $_COOKIE['cpwd'];
}
else
{
	if(isset($_SESSION['sun']) && isset($_SESSION['spwd']))
	{
	$u = $_SESSION['sun'];
	$p = $_SESSION['spwd'];
	}
}
$query = "select count(*) from admin where adminname='$u' and password='$p'";
$n = my_one($query);
if($n==1)
{
return true;
}
else
{
return false;
}
}

function allproblems()
{
$query = "select * from problem";
$rs = my_select($query);
return $rs;
}


function newUserRequest()
{
$query = "select * from student where status = 'pending'";
$rs = my_select($query);
return $rs;
}

function notstarted()
{
$query = "select * from problem where status='pending'";
$rs = my_select($query);
return $rs;
}

function getVote($id)
{
$query = "Select * from vote where pid=$id";
$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

function inprogress()
{
$query = "select * from problem where status='InProgress'";
$rs = my_select($query);
return $rs;
}



function totalproblemsInProgress()
{
$query = "select * from problem where status='inprogress'";

$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}
function totalproblems()
{
$query = "select * from problem";

$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}
function totalproblemsCompleted()
{
$query = "select * from problem where status='Completed'";

$rs = my_select($query);
$n = mysqli_num_rows($rs);
return $n;
}

?>