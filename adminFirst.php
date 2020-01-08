<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style>
	
	body {

background-image:url("background.png");
background-position: center;
background-size: cover;
background-repeat: no-repeat;
height:400px

}
	
#btn1 , #btn2 {
	font-family: arial;
	text-transform: uppercase;
	font-size: 20px;
    width: 240px;
    height: 60px;
    border-radius: 80px;
    line-height: 60px;
    text-align: center;
    border: 3px solid #009688;
    display: inline-block;
    text-decoration: none;
    color: #009688;
    position: relative;
    overflow: hidden;
    background: transparent;
    margin-top: 200px; 
    margin-left: 250px;
    }
	
#btn3 {
	font-family: arial;
	text-transform: uppercase;
	font-size: 20px;
    width: 240px;
    height: 60px;
    border-radius: 80px;
    line-height: 60px;
    text-align: center;
    border: 3px solid #009688;
    display: inline-block;
    text-decoration: none;
    color: #009688;
    position: relative;
    overflow: hidden;
    background: transparent;
    margin-top: 100px; 
    margin-left: 500px;
    }
	
	#bmslogo{
position:absolute;
top:70px;
right:670px;
}

 	</style>
 </head>
 <body>
  <div id='bmslogo'><img src='BMSITlogo.png' height='100' width='100'></div>
  <center><h2>BMS Institute Of Technology & Management</h2></center>
   <form name="button" action="" method="post">
   	<button type="submit"  name="button1" id="btn1"><a href="admin2.html">ADD OPEN COURSE</a></button>
   	<button type="submit" name="button2" id="btn2"><a href="viewStudentList.php">VIEW STUDENT LIST</a></button> 
    <button type="submit" name="button3" id="btn3"><a href="delete1.php">DELETE COURSE</a></button> 	
   </form>
 </body>
 </html>    
  
