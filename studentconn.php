
<?php
//ob_start();
//session_start();
require_once("connectsql.php");
$page_title = 'studentReg Page';
if(isset($_POST['submit'])){
//header('location:studentReg.php');
$usn =$_POST['usn'];
//$_SESSION['usn']=$usn;
$name =$_POST['name'];
$mobnum =$_POST['mobNumber'];
$email =$_POST['emailAddress'];
$oc =$_POST['openCourseOptions'];
$fee =$_POST['fees'];


    
	
    $sql = "INSERT INTO student_details(usn,name,mobNumber,emailAddress,openCourseOptions,fees) VALUES (?,?,?,?,?,?)";
	$stmt = mysqli_prepare($dbc,$sql);
	mysqli_stmt_bind_param($stmt,'ssissi',$usn,$name,$mobnum,$email,$oc,$fee);
	mysqli_stmt_execute($stmt);
	header('location: regComplete.html');
	echo "done";
}
else{
	echo "sdf";
}
   
?>
	




