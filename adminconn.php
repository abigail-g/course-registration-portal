
<?php
//ob_start();
//session_start();
 require_once("connectsql.php");
$page_title = 'admin Page';
if(isset($_POST['submit'])){
//header('location:cources.php');
$dept =$_POST['Department'];
$opc =$_POST['OpenCourse'];
$fname =$_POST['fname'];
$rseats =(int)$_POST['rseats'];
$fees=(int)$_POST['fees'];
$target_dir="pdf/";
$pdf=basename($_FILES['file']['name']);
$target_file=$target_dir.$pdf;
if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
	
}
  else{
	  echo "there is error in uploading file";
  }

	

   
	
   $sql = "INSERT INTO course (Department,OpenCourse,FacultyName,TotalSeats,Fees,pdf) VALUES (?,?,?,?,?,?)";
	$stmt = mysqli_prepare($dbc,$sql);
	mysqli_stmt_bind_param($stmt,'sssiis',$dept,$opc,$fname,$rseats,$fees,$pdf);
	mysqli_stmt_execute($stmt);

	header('location: regComplete.html');
}
else{
	echo "sdf";
}
   
?>
	




