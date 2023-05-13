<?php
session_start();
?>
<html>
<head><title>Home </title></head>
<style>
button {
    background-color: Transparent;
    background-repeat:no-repeat;
	color:white;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}
ul  {
     list-style-type : none;
	 padding:10px;
	 overflow:hidden;
	 background-color:Royalblue;
    }

li	{
      float: left;
    }

li  {
      display: block;
      color: White;
      text-align: center;
	  margin:0px;
	  width :20%;
      text-decoration: none;
    }

#down {
        position:absolute;
		width:99%;
		border :0px solid;
		background-color:Bisque;
	  }
a   {
      text-decoration:none;
	  color:inherit;
    }
</style>

        <!-- Logo -->
<body  bgcolor="HoneyDew">
  <div align="right">
  <?php
  if(isset($_SESSION['email']))
{
  echo " welcome ".$_SESSION['username']."</font><br>";
}
?>
</div>
  <img src=logo.png height="100px" width="100px" align="left"><br> &nbsp
   <font  style="font-family:Hobo Std ; font-size:60;">Dr.Auto</font><br>
  <div id="up">
   <ul>
     <li><a href="Home.php">Home</a></li>
	 <li><a href="Booking.php"> Book Service </a></li>
	 <li><a href="">Vehicles</a></li>
	 <li><a href="aboutus.html"> About us </a></li>
	 <li><a href="uprofile.php">Profile</a></li>
   </ul>
  </div>
  <div id="mid"><br><br>
   <img style="float:left"; src="p1.svg" height="300px" width="600px" ><br>
   <font style="font-family:Hobo Std ; font-size:60";>Convenient and trusted partners for your Two-Wheeler </font>
   <br><br><br><br><br><br>
  </div><br><br>

  <div>
    <h1 style="text-align:center"><u><i> Why choose Dr.Auto ?</i></u></h1> <br>
	 <img src="1.png" height="80px" width ="230px" hspace="100" alt="On the spot support">
	 <img src="2.png" height="80px" width ="230px" hspace="100" alt="24/7 Service">
	 <img src="3.png" height="80px" width ="230px" hspace="100" alt="Top rated">
  </div> <br><br><br><br>

     <!-- Bottom Menu -->

   <div  id="down">
    <h5 align="center" > <b><a href="Home.html">Home</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="aboutus.html">About us</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           	<a href="contactus.html">Contact us</a>&nbsp&nbsp&nbsp&nbsp&nbsp <a>Terms & Conditions</a> </b></h5>
    <h5 align="center"> <b><u>Follow us on</u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="www.facebook.com">Facebook </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	                         <a href="www.instagram.com">Instagram</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="www.youtube.com"> Youtube</a></h5>
   <div>
	<hr width="95%" align="center">
    <h6  style="text-align:center"; >© 2021 Dr.Auto. All Right Reseved </h6>
   </div>
  </div>

</body>
</html>
