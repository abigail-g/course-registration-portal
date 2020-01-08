	

<?php 
include('courseconn.php');
$sql="select * from course";
$result = $cn->query($sql);
 ?>
 
<!DOCTYPE html>
<html>
<head>
	 <title>BMSIT&M Open Course</title>
	
	    <style>
		
		body {

		background-image:url("background.png");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		height:1000px;

		}


	   .regform{
	    margin: 0 auto;
		border:1px solid;
		padding: 25px 40px 25px 25px;
		width: 28%;
		position:relative;
		background-color:white;
	   }
	   
	   .btn{
	    position:absolute;
		left:44%;
		background-color: #6DB3F2;
        border:none;
	   }
	   
	   .innerform{
	    border-style:solid;
		padding: 20px 20px 30px 20px;
		border-radius:5px;
	   }
	   
			   /* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 15% auto; /* 15% from the top and centered */
			padding: 20px;
			border: 1px solid #888;
			width: 30%; /* Could be more or less, depending on screen size */
		}

		/* The Close Button */
		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
			
		td{
			border:none;
		}
		table{
			border-collapse:collapse;
		}
	</style>
	
</head>
<body>

      <!-- The Registration Form-->
    <center><h2>Open Course Registration</h2></center>
    
	   <div class="regform">
		  <form action="http://localhost/Finalopencourse/studentconn.php" method="post">
		  usn : <input type="text" name="usn" required value=""><br><br>
		  name: <input type="text" name="name" required value=""><br><br>
		  <div class="innerform">
			  mob. number  : <input type="text" name="mobNumber" value="" required ><br><br>
			  email address: <input type="text" name="emailAddress" value="" required ><br><br>
			  <input class="btn" type="submit"   name="Submitotp" value="Generate otp" id="myBtn">
		  </div>
		  <br>select open course: <select id="openCourseOptions" name="openCourseOptions" value="" required >
								  <option value="noCourse">no course</option>
							  </select><br><br>
		  fees: <input type="text" name="fees" value=""><br><br>
		  <input class="btn" type="submit" value="submit" name="submit" ><br>
	    
    </form>
	</div>
	<br><br>
	
     <!-- The Open Cources available-->
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
				/*$subject=$row['OpenCourse'];
				$sqlnext="select * from student_details where openCourseOptions=?";
				$stmtnext=mysqli_prepare($cn,$sqlnext);
				mysqli_stmt_bind_param($stmtnext,'s',$subject);
		        $resultnext=mysqli_stmt_execute($sqlnext);
				$num_rows = mysqli_num_rows($resultnext);*/
				
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
	 
	 <!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
		<span class="close">submit</span>
		<p>otp validation</p>
		enter otp<input id="otp" type="text" name="otp" value=" "/>
	  </div>

	</div>
	
	<script>
		   // Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		
		//randonumber set as otp
		var randomNumber;

		// When the user clicks on the button, open the modal 
		btn.onclick = function() {
		
				var digits='0123456789';
				let genOTP='';
				for(let i=0;i<4;i++){
					genOTP+=digits[Math.floor(Math.random()*10)];
				}
				randomNumber=genOTP;
				modal.style.display = "block";
				alert(genOTP);
				
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			
			var OTP = parseInt(document.getElementById("otp").value);
			if(OTP==randomNumber){
			   modal.style.display = "none";
			   document.getElementById("openCourseOptions").innerHTML =
								  '<option value="volvo">Volvo</option><option value="saab">Saab</option><option value="opel">Opel</option><option value="audi">Audi</option>';
                    }		
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		
		//validation of usn
		/*function usnCheck(usn)
		{
			var pattern1=/^[1-4][a-z,A-Z]{2}[0-9]{2}[a-z,A-Z]{2}[0-9]{3}$/	
			if(!usn.value.match(pattern1)||usn.value.length==0)
			{
	            alert("Invalid USN!\nEnter a valid USN!")
				return false
			}
            else
                alert("USN valid")
		}*/
	</script>
	 
</body>
</html>
