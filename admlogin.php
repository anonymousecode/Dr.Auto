<?php
session_start();
?>
<html>
<head><title>Admin login</title>
</head>
<style>

button {
			background-color:powderblue;
			border-radius: 10px;
			color:black;
			padding: 14px 20px;
			margin: 8px 0;
			border: 2px solid black;
			cursor: pointer;
			width: 30%;
	   }
	   
a  {
     text-decoration:none;
     color:inherit;
   }
   
body {
		font-family:verdana;
	 }
	 
input{
		width: 100%;
		padding: 15px 20px;
		margin: 6px 0;
		display: inline-block;
		border: 1px solid #ccc;
	    border-radius:10px;
	 }
	 
.box {
      padding:30px;
	  border-radius:20px;
	  border: 5px solid black;
	  width:360px;
	  background-color:bisque;
	  text-align:center;
    }	  

</style>

                    <!-------------------body----------------------->
<body bgcolor="white">
 
 <center>
	<img src="logo.png" width="100px" height="100px"> <br>
     <font style="font-family:Hobo Std ; font-size:50px; text-align:center;" >Admin Login </font> </br>
                     
	<div class="box" >
		<form  align="center" style="color:#283747;" action="admlogin.php" method="post"><br><br>
         <div align="left">
			<label><b>User name :</b></label><br><input type="text" name="username"><br><br>
			<label><b>Password :</b></label><br><input type="password" name="pass" ><br><br>
			<center> <input name="submit" type="submit" value="Login"></center><br>
		 </div>
		 <a style="color:black;"href=""><font size="3px">Forgot password?</a></font><br>
		</form>
	</div>
	
	<font color="black"align="center">@Dr.Auto&nbsp <a style="color:2F4F4F;"href="login.php"><u> Login as user </u></a></font>

 </center>
</body>
</html>
<?php
include 'mysqlconn.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pass'];
$check="select*from admin where admname='".$username."' AND admpassword='".$password."'";
$sql=mysqli_query($conn,$check);
$res=mysqli_fetch_array($sql);
if(is_array($res))
{
	$_SESSION['admname']=$res['admname'];
	$_SESSION['admpassword']=$res['admpassword'];
}
else
{
	echo'<script type="text/javascript"> alert("invalid email or password");';
    echo 'window.location.href = "admlogin.php" </script>';
}
if(isset($_SESSION['admname']))
{
	header("location:admdash.php");
}
}
else{
	echo'<script type="text/javascript"> alert("invalid email or password")';
}
?>
	
	