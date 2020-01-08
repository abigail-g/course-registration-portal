<?php
include('courseconn.php');
$sql="select * from course";
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
     		<th>Department</th>
     		<th>Open Courses</th>
     		<th>Name/s of the faculty member</th>
     		<th>Remaining Seats</th>
			<th>fees</th>
            <th>Brochure</th>
     	</tr>
       

     	<?php
     		while($row=$result->fetch_assoc()){
        ?>
        <tr>
        	<td><?php echo $row['Department']; ?></td>
        	<td><?php echo $row['OpenCourse']; ?></td>
        	<td><?php echo $row['FacultyName']; ?></td>
        	<td><?php echo $row['TotalSeats']; ?></td>     
			<td><?php echo $row['Fees']; ?></td>
        	<td><button type="submit" btn="button"><a href="pdf/<?php echo $row['pdf']?>">View PDF</a></button></td>
        	
        	  	
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