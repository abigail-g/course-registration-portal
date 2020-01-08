<html>
<head>
 <title>BMSIT&M Open Course</title>
</head>

<style>
body {

background-image:url("background.png");
background-position: center;
background-size: cover;
background-repeat: no-repeat;
height:400px

}

form {
margin: 0 auto;
width: 50%;
margin-top : 10%;
padding:25px 25px 25px 45px;
<!--background-color:#6DB3F2;-->
position:relative; 
top:60px;
text-align:center;
}

.btn{
background-color: #6DB3F2;
border:none;
left:46%;
position:absolute;
}

.cbtn{
position:absolute;
left:53%;
border:none;
background-color: #6DB3F2;
}

</style>
<body>
<form name="login">
<h1><center>Admin Login Page</center></h1>
Username : <input type="text" name="userid"/><br><br>
Password : <input type="password" name="pswrd"/><br><br>
<input class="btn" type="button" onclick="check(this.form)" value="Login"/>
<input class="cbtn" type="reset" value="Cancel"/>
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "abcd" && form.pswrd.value == "1234")
  {
    window.open('adminFirst.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
</body>
</html>