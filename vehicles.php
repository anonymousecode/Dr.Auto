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
 
  <!--Cards -->  
  
 <div class="cardcoll"> 
  <div class="card">
   <img class="image" src="#"> 
   <form><br> 
    <textarea name="veh1" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   
  
  <div class="card">
   <img class="image" src="Uploads/<?php echo $veh_img ;?>"> 
   <form><br> 
    <textarea name="veh2" readonly><?php echo $vd; ?> </textarea>
	
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   
  
  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2020/07/5f1fc84aa0383.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh3" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   
  
  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2020/07/5f09512d703ef.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh4" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>    
  
  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2020/05/5ebe95289c9e5.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh5" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>  
 </div>  <br><br><br><br>
 
 <div class="cardcoll">
  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2020/02/5e387c36485b7.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh6" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   

   <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2020/01/5e20a5fc0dae2.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh7" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   

  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2019/12/5de644e2699b6.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh8" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   

  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2019/11/5dde49225851c.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh9" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   

  <div class="card">
   <img class="image" src="https://bd.gaadicdn.com/upload/usedbikesimages/2019/10/5db925746d854.jpg?imwidth=320&impolicy=resize"> 
   <form><br> 
    <textarea name="veh10" readonly> </textarea>
   </form>
   <h5 align="center"> Visit Workshop for more </h5>
  </div>   
 </div>

   <br><br><br><br>
  <!-- Bottom Menu -->   
	
  <div  id="down">
    <h5 align="center" > <b><a href="Home.html">Home</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="aboutus.html">About us</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           	<a href="contactus.html">Contact us</a>&nbsp&nbsp&nbsp&nbsp&nbsp <a>Terms & Conditions</a> </b></h5>
    <h5 align="center"> <b><u>Follow us on</u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://www.facebook.com">Facebook </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	                         <a href="https://www.instagram.com">Instagram</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://www.youtube.com"> Youtube</a></h5>
    <div> 
	 <hr width="95%" align="center">
     <h6  style="text-align:center"; >© 2021 Dr.Auto. All Right Reseved </h6>
    </div>	
  </div>	
</body>
</html>

<?php
    include'mysqlconn.php';
  
    if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
		

	
	$sql="SELECT veh_id,veh_det,veh_img FROM  vehicles ";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	$vd=$row['veh_det'];
	$veh_img=$row['veh_image'];
	$result=mysqli_query($conn,$sql);
    echo $sql;	
?>
