<html>
<head><title> Vehicles </title></head>
<style>
html {
      scroll-behavior: smooth;
     }

a   {
      text-decoration:none;
	  color:inherit;
    }

.image {
         max-height:200px;
		 max-width:260px;
       }
	   
.card {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
		margin: auto;
		text-align: center;
		font-family: arial;
		display: inline-block;
		background-color:#ffffff;
	  }	   
	  
.cardcoll {
            padding:0px 12px 0px 5px ;
		  }	
	  
textarea{
          height:180px;
		  width:250px;
          font-family:Georgia;
		
		}

#down {
        position:absolute;
		width:99%;
		border :0px solid;
		background-color:Bisque;
	  }
</style>

<body bgcolor="#e6e6ff">
 
 <div id="top" >
   <img src=logo.png height="80px" width="80px" align="left"><br> &nbsp
   <font  style="font-family:Hobo Std ; font-size:40;">Dr.Auto</font><br>
 </div > <br><br>
 
 <hr width="100%" align="center" size="2.5" color="black">
 
 <h2 align="left">&nbsp &nbsp &nbsp Vehicles for sale </h2>
 
 <hr width="100%" align="center" size="2.5" color="black"> <br><br><br>
 </body>
 </html>
 <?php
 include 'mysqlconn.php';
 if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql='SELECT veh_id,veh_det,veh_img FROM  vehicles ';
	$res=mysqli_query($conn,$sql);
	echo $sql;
	$i=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$vd[$i]=$row['veh_det'];
	    $veh_img[$i]=$row['veh_image'];
		$i++;
	}
	$i=0;
	foreach($vd as $value)
	{
		echo"
		<div class=\"cardcoll\"> 
        <div class=\"card\">
        <img class=\"image\" src=\"Uploads/ \"$veh_img[$i]\" \" >
        <form><br> 
        <textarea name=\"veh1\" readonly> </textarea>
		$vd[$i]<br>
        </form>
        <h5 align=\"center\"> Visit Workshop for more </h5>
        </div>		
		</div>
		";
	}
?>