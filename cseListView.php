<?php
include('courseconn.php');
$sql="select * from student_details where op";
$result = $cn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<style>
td{
			border:1px solid;
		}
		table{
			border-collapse:collapse;
		}
body {

background-image:url("background.png");
background-position: center;
background-size: cover;
background-repeat: no-repeat;
height:650px

}
	</style>
</head>

<body>
 <table align="center" border="1px" border-collapse:"collapse" style="width:600px; line-height: 40px;">
     	<tr>
     		<th colspan="6"><h2>LIST OF OPEN COURSES</h2></th>
     	</tr>
     	<tr>
     		<th>USN</th>
     		<th>NAME</th>
     		<th>MOB NUMBER</th>
     		<th>EMAIL ADDRESS</th>
			<th>OPEN COURSE</th>
            <th>FEES</th>
     	</tr>
       

     	<?php
     		while($row=$result->fetch_assoc()){
        ?>
        <tr>
        	<td><?php echo $row['usn']; ?></td>
        	<td><?php echo $row['name']; ?></td>
        	<td><?php echo $row['mobNumber']; ?></td>
        	<td><?php echo $row['emailAddress']; ?></td>     
			<td><?php echo $row['openCourseOptions']; ?></td>
			<td><?php echo $row['fees']; ?></td>
        	
        	  	
        </tr>
        <?php
     	}
     	?>

     </table>
	 <br/><br/>
	<center> <form  action="http://localhost/Finalopencourse/view.php" method="post">
                 <p>Enter the OpenCourse:<br><br></p><input type="text" name="sub"><br><br>
			      <button type="submit" name="submit">submit</button><br><br>
        </form></center>
	 
</body>
</html>