<?php
session_start();
?>
<html>
<head> <title> Settings </title>
</head>
<body> 
   <h4> Add mechanics </h4>
  <form  align="center" style="color:#283747;" action="manmech.php" method="post"><br><br>
  
	<label><b>Enter Mechanic id :&nbsp</b></label><input type="text" name="id"><br><br>
	<label><b>Enter Name :&nbsp</b></label><input type="text" name="name"><br><br>
	<label><b>Enter Phone number :&nbsp</b></label><input type="text" name="phn"><br><br>
    <input type="submit" name="add"  value="Add"><br>
	
	<h4> Delete Mechanics </h4>
   <br><br>
	<label><b>Enter Mechanic id :&nbsp</b></label><input type="text" name="id1"><br><br>
    <input type="submit" name="del"  value="Delete""></form>
	
</body>
</html>

<?php
    include'mysqlconn.php';
  
    if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}	
	if(isset($_POST['add']))
	{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phn'];
	$sql="insert into mechanics values('$id','$name','$phone')";}
	if(isset($_POST['del']))
	{
	$id1=$_POST['id1'];
	$sql2="delete from mechanics where id='".$id1."'";
	}
	
	
	
	if(isset($_POST['add']))
	{
	$result=mysqli_query($conn,$sql);	
    
	if (mysqli_affected_rows($conn)&&$result) 
    {
     echo '<script type="text/javascript">';
	 echo 'alert(" added succesfully!!!");';
     echo 'window.location.href="admdash.php"';
	 echo '</script>';
	 
    }
   else 
	{
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	}
	if(isset($_POST['del']))
	{
	$result2=mysqli_query($conn,$sql2);	

	if (mysqli_affected_rows($conn)&&$result2) 
    {
     echo '<script type="text/javascript">';
	 echo 'alert(" deleted succesfully!!!");';
     echo 'window.location.href="admdash.php"';
	 echo '</script>';
	 
    }
   else 
	{
        echo "<br>Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
	}
    mysqli_close($conn);
?>