<html>
<head> <title> Settings </title>
</head>
<body>
  <form  align="center" style="color:#283747;" action="settings.php" method="post"><br><br>
	<label><b>Enter current password :&nbsp</b></label><input type="password" name="epass"><br><br>
	<label><b>Enter new password :&nbsp</b></label><input type="password" name="npass"><br><br>
    <input type="submit" name="submit" value="change""></form>
</body>
</html>

<?php
    include'mysqlconn.php';
  
    if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
		
	if(isset($_POST['submit']))
	{	
	$epass= $_POST['epass'];
    $npass= $_POST['npass'];
	
	$sql="update admin set admpassword='".$npass."' where admpassword='".$epass."'";
	
	$result=mysqli_query($conn,$sql);	

	if (mysqli_affected_rows($conn)&&$result) 
    {
     echo '<script type="text/javascript">';
	 echo 'alert("Password changed SUCESSFULLY !!!");';
     echo 'window.location.href="admlogout.php"';
	 echo '</script>';
	 
    }
   else 
	{
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
	}
    mysqli_close($conn);
?>