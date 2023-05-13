<?php
session_start();
?>
<html>
<head><title>Booking</title>
</head>

<style>
  
html {
      scroll-behavior: smooth;
     }
 
 
button {
		 border-radius:10px;
		 color:black;
		 padding: 4px 10px;
		 margin: 4px 0;
		 border: 2px solid #4CAF50;
		 cursor: pointer;
		 width:20%;
	   }
	   
input {
		 width:85%;
		 height:5%;
		 padding:5px,10px;
		 margin:9px 7;
		 display:inline-block;
		 border: 2px solid black;
		 border-radius:10px; 
	  }
	  
body {
		 background-color:lavender;
		 font-family:verdana;
     }

a   {
		text-decoration:none;
		color:inherit;
	}
		  
.left {
		 text-align:left;
		 padding-left:30px;
		 float:left;
		 width:40%;
		 background-color:white;
		 height:625px;
		 margin-left:75px;
	  }

.right {
		 text-align:left;
		 padding-left:30px;
		 float:right;
		 width:40%;
		 background-color:white;
		 height:625px;
		 margin-right:75px;
	   }
		
.right , .left {
					border:2px solid green;
					margin-top:10px;
					border-radius:10px;
				}
		
</style>

<body>
 
 <div>
   <img src=logo.png height="80px" width="80px" align="left"><br> &nbsp
   <font  style="font-family:Hobo Std ; font-size:40;">Dr.Auto</font><br>
 </div> <br><br>
 <hr width="100%" color="black"> <br>
 
 <center>

  <div class="left">
    <h1 align="center"><u>On road Assistance</u></h1><br>
	 <form action="Booking.php" method="post">
	  <label><b>Vechicle :</label></b><input type="text" name="veh"><br>
	  <label><b>Location :</label></b><input type="text" name="location"><br>
	  <label><b>Landmark :</label></b><input type="text" name="landmrk"><br>
	  <label><b>phone No :</label></b> <input type="text" name="phn"><br><br>
	  <center><button type="submit" name="onroad"><b>Book Assistance</b></button></center>
	 </form>
  </div>

  <div class="right">
   <h1 align="center"><u>Service Booking</u></h1><br>
	<form action="Booking.php" method="post">
	 <label><b>Date : </label></b> <br><input type="date"><br><br>
	 <center><button name="service" type="submit"><b>Book Service</b></button></center>
	</form>
  </div>

 </center>

</body>
</html>
<?php
include 'mysqlconn.php';
if(isset($_POST['onroad']))
{
	echo "hai";
	$veh=$_POST['veh'];
	$landmrk=$_POST['landmrk'];
	$phn=$_POST['phn'];
	$location=$_POST['location'];
    $username=$_SESSION['username'];
	$sql="insert into on_road (mobile_no,username,landmark,veh_name,location)
	      values ('$phn','$username','$landmark','$veh','$location')";
	$res1=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)&&$res1)
	{
		echo '<script> alert("on road successfully registered");';
		echo ' window.location .href="home.php"</script>';
	}
}
if(isset($_POST['service']))
{
	$username=$_SESSION['username'];
	$userid=$_SESSION['userid'];
	$sql2="insert into service_booking (user_name,user_id)
	        values('$username','$userid')";
			mysqli_query($conn,$sql2);
			if(mysqli_affected_rows($conn)&&$sql2)
			{
			echo '<script> alert("booking successfully registered");';
		    echo ' window.location .href="home.php"</script>';	
			}
}

?>