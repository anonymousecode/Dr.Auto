<?php 
   
    include 'mysqlconn.php';
	
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$name= $_POST["name"];
	$email=$_POST["email"];
    $message=$_POST["message"];
	
	
	$sql ="INSERT INTO feedback(name,email,message) 
	       VALUES('$name' ,'$email','$message')";
		   
	  $result=mysqli_query($conn,$sql);	

	if (mysqli_affected_rows($conn)&&$result) 
    {
     echo '<script type="text/javascript">';
	 echo 'alert("Submission sucessfull ! ");';
	 echo 'window.location.href="contactus.html";';
	 echo '</script>';

	 
    }
   else 
	{
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	  

    mysqli_close($conn);
?>	   