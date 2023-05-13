<?php
session_start();
?>
<html>
<head> <title> Settings </title>
<style>
textarea{
          height:150px;
		  width:555px;
		   font-family:Georgia;
		}
</style>		
</head>
<body> 
   <h4> Add Vehicles </h4>
  <form  action="vehadd.php" method="post" enctype="multipart/form-data"> 
	<textarea placeholder=" Enter details" name="detail" ></textarea><br><br>
	<input type="file" name="source" accept="image/png,image/jpeg">
	<input type="submit" name="submit" value="add">
  </form>
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
	$veh_det= $_POST['detail'];
    $source= $_FILES["source"]["name"];
	
	$tname=$_FILES["source"]["tmp_name"];
	
	$uploads_dir="Uploads";
	
	move_uploaded_file($tname,$uploads_dir."/".$source);
	
	$vid="v".substr(str_shuffle("01234567890"),1,4);
	
	$sql="INSERT INTO vehicles  VALUES ('$vid','$veh_det','$source')";
	
	$result=mysqli_query($conn,$sql);
    echo $sql;	

	if (mysqli_affected_rows($conn)&&$result) 
    {
     echo '<script type="text/javascript">';
	 echo 'alert("Password changed SUCESSFULLY !!!");';
     echo 'window.location.href="logout.php"';
	 echo '</script>';
	 
    }
   else 
	{
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
	}
    mysqli_close($conn);
?>  
	
	