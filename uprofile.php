<?php 
session_start();
if(isset($_SESSION['email']))
{
$name=$_SESSION['username'];
$email=$_SESSION['email'];
$phn=$_SESSION['phn'];
}
else{
	header("location:login.php.");
}
?>
<html>
<head>
<title> Profile </title>
</head>

<style>

a {
   text-decoration:none;
   color:Lavender;
  }
  
#imgp {
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-top:50px;
		height:150px;
		width:140px;
      }
	  
.button {
            background-color:Teal; 
			display: table;
			margin-right: auto;
			margin-left: auto;
			width:100px;
			height:25px;
			border:3px solid black;
			text-align:center;
			border-radius:3px;	  
	    }
	  
.column0 {
			margin-bottom:20px;
			border-radius:10px;
			margin-left:20px;
			float:left;
			border:2px solid tomato;
			height:500px;
			width:200px;
         }
		 
.column1 {
			border-radius:10px;
			margin-left:20px;
			float:left;
			border:2px solid black;
			height:200px;
			width:50%;
 		 }
		 
.column2 {
			margin-top:10px;
			border-radius:10px;
			margin-left:20px;
			float:left;
			border:2px solid black;
			height:286px;
			width:50%;
		 }
	
.column3 {
            margin-bottom:20px;
            border-radius:10px;
			margin-left:20px;
			position:absolute;
			top:128;
			right:20;
            border:2px solid tomato;
            height:500px;
            width:28%;
         }			
 
input {
       height:35px;
       width:500px;
       font-family:Georgia;	  
	   border-radius:5px;
	  }		

textarea {
          border-radius:5px;
		  border-width :2px;
        }		  
		 
</style>
                    <!-------------------body----------------------->
					
<body bgcolor="#e6e4df">

  <div id="top" >
   <img src="logo.png" height="80px" width="80px" align="left"><br> &nbsp
   <font  style="font-family:Hobo Std ; font-size:40;">Dr.Auto</font><br>
 </div > <br>
 
 <hr width="100%" color="black"> <br>

 <div class="column0">
    <img id="imgp"  src="pimg.png"><br><br>
	<a href=""> <div class="button"> Edit Profile </div> </a> <br><br>
	<a href="usettings.php"> <div class="button"> Change Password </div>	</a><br><br>
	<a href="logout.php"> <div class="button"> Logout </div>	</a>
 </div> 
  
 <div class="column1">
   <div style="margin-left:10px;margin-top:30px;">
    <form action="" method="" name="">
		Name &nbsp&nbsp: <input type="text" name="Name" value="<?php echo $name;?>" readonly> <br><br>
		Phone &nbsp&nbsp: <input type="text" name="Phone" value="<?php echo $phn;?>" readonly> <br><br>
		Email &nbsp&nbsp: <input type="text" name="Email" value="<?php echo $email;?>" readonly> <br><br>
		
   </div>
 </div>

 <div class="column2">
   <div style="margin-left:10px;margin-top:10px;">
    <u>Service History</u>
	<form action="" method="" name="">
	 <textarea rows="16" cols="85" readonly>   </textarea>
	</form> 
   </div>
 </div>
  
  <div class="column3">  
  </div>
</body>
</html>
