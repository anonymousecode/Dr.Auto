<html>
<head> <title> Signup </title>
</head>
<style>

button{
        background-color:royalblue;
		border-radius: 12px;
		color:white;
        padding: 14px 20px; 
		margin: 8px 0;
		border: 2px solid #111;
		cursor: pointer;
		width: 30%;
      }
	  
* {
    box-sizing: border-box;
  }

input {
		  width: 100%;
		  padding: 10px ;
		  margin: 6px 0;
		  display: inline-block;
		  border: 2px solid black;
		  border-radius:10px;
		  box-sizing: border-box;
      }
	   
body {
		   background-color:lavender;
		   font-family:verdana;
	 }

a {
   text-decoration:none;
   color:inherit;
  }

.form {
		display: table;
		padding:20px;
		border-radius:20px;
		border: 2px solid black;
		width:80%;
		height:70%;
		background-color:bisque;
		text-align:left;
       }

.column {
		  float:left;
		  width:50%;
		  padding-left:5px;
		  padding-right:5px;
		}
		
#image {
         position:absolute;
	     top:250;
		 right:175;
         height:40%;
		 width:35%;
       }		 

</style>

<body>
  <center>
    <img src="logo.png" width="100px" height="100px"> <br>
    <font style="font-family:Hobo Std ; font-size:50px; text-align:center;" > Sign up </font>
	
    <div class="form">
		<div class="column">
          <form  style="color:#283747;" action="signup.php" method="post">
			<label><b>First name:</b></label><input type="text" name="fname">
			<label><b>Last name:</b><label><input type="text" name="lname"><br>
			<label><b>Email</b></label><input  type="email" name="email"><br>
			<label><b>Phno:</b></label><input type="text" name="phn"><br>
			<label><b>New password:</b></label><input  type="password" name="pass">
			<label><b>Confirm password:</b></label><input  type="password" name="cpass"><br>
			<center> <input type="submit" name="submit">Create  account </center>
		  </form>
        </div>
     
		<img id="image" src="p1.png" alt="LOGO"> <br>
	</div>
	
	<h4>Already a user ,<a href="login.php"><u>Login</u></a> </h4>
  </center>
	  	
</body>
</html>
<?php 
    include 'mysqlconn.php';
	
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
		
	if(isset($_POST['submit']))
	{
	
	$fname= $_POST["fname"];
    $lname= $_POST["lname"];
	$email=$_POST["email"];
    $phn=$_POST["phn"];
	$pass=$_POST["pass"];
	$cpass=$_POST["cpass"];
	
	$sql ="INSERT INTO reg_user(username,lname,phn,email,pass,cpass) 
	       VALUES('$fname' ,'$lname','$phn','$email','$pass','$cpass')";
	
    $result=mysqli_query($conn,$sql);	

	if (mysqli_affected_rows($conn)&&$result) 
    {
     echo '<script>alert("USER REGISTERED SUCESSFULLY !!! Login to Continue")</script>';
	 
    }
   else 
	{
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	  
	  echo '<h1><a href="login.php" > Login here </a> </h1>';
	}
	}
    mysqli_close($conn);
?>

