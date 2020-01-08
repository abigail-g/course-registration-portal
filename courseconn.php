

	

<?php
/*
$severname="localhost";
$username="root";
$password="";
$db="oopen_course"

$conn=new mysqli($severname,$username,$password,$db);
if(!$conn){
	die ("Error on the Connection".$conn->connect_error);
} */

function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","oopen_course");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","oopen_course");

?>

