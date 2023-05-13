<?php
session_start();
?>
<html>
<head><title>login</title>
</head>
<style>
a  {
     text-decoration:none;
     color:inherit;
   }

body {
		font-family:verdana;
	 }

input {
		  width: 100%;
		  padding: 15px 20px;
		  margin: 6px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
	  }

#sub {

		 padding: 14px 20px;
		 margin: 8px 0;
		 color:black;
		 border: solid;
		 border-radius:18px;
		 cursor: pointer;
		 width: 30%;
       }

a {
   text-decoration:none;
   color:Lavender;
  }

</style>

                    <!-------------------body----------------------->
<body bgcolor=#f3f3f3>
 <center>
	<img src="logo.png" width="100px" height="100px"> <br>
	<font style="font-family:Hobo Std ; font-size:60px; text-align:center;" > Login </font>

 <div style="padding:50px;border-radius:20px;padding-top:0px;padding-bottom:0px;border-color:#A9A9A9;border-style:solid;width:360px;background-color:#f3f3f3;text-align:center;border-width:10px;">


  <form  align="center" style="color:#283747;" action="login.php" method="post"><br><br>
   <div align="left" style="padding-top:7px;">
	<label><b>EMAIL :</b></label><br><input type="text" name="email"><br><br>
	<label><b>PASSWORD :</b></label><br><input type="password" name="userpass"><br><br>
	<center><input id="sub" type="submit" name="login" value="Login"></center>
   </div>

   <a href=""><font color="black" size="3px">Forgot password?</a></font><br>
  </form>
 </div>

 <font color="white"align="center">Don't have an Account?&nbsp <a href="signup.php"><u>Get Started!</u></a></font>

</center>
</body>
</html>
<?php
include 'mysqlconn.php';
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pass=$_POST['userpass'];
  $check=mysqli_query($conn,"select*from reg_user where email='".$email."' AND pass='".$pass."' ");
  $row=mysqli_fetch_array($check);
  if(is_array($row)){
  $_SESSION['email']=$row['email'];
  $_SESSION['username']=$row['username'];
  $_SESSION['phn']=$row['phn'];
  $_SESSION['userid']=$row['userid'];
  }
  else{
    echo'<script type="text/javascript"> alert("invalid email or password");';
    echo 'window.location.href = "login.php" </script>';
  }
  if(isset($_SESSION['email']))
  {
    header("location:home.php");

  }
}
?>
