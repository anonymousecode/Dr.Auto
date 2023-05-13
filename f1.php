<?php
session_start();
?>
<html>
<head><title> Vehicles </title></head>

<style>
button {
           background-color: #00cc66;
		   border: none;
		   color: white;
		   padding: 12px 40px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
		   width:12%;
           margin: 2px 2px;
           cursor: pointer;
		}

a   {
      text-decoration:none;
	  color:inherit;
	  margin-left:50px;
    }

.menu {
       margin: auto;
	   padding-left:100px;
}

</style>

<body>
 
  <div id="top" >
   <img src=logo.png height="80px" width="80px" align="left"><br> &nbsp
   <font  style="font-family:Hobo Std ; font-size:40;">Dr.Auto</font><br>
 </div > <br>

 <hr>
 <h3> Admin Dashboard </h3>
 <hr>

  <div class="menu">

      
      
	  <a href="" target="f3"> <button type="button" > Feedback </button> </a>
	  <a href="" target="f3"> <button type="button" > Vehicles  </button> </a>
	  <a href="admlogout.php" target="_top"> <button type="button" >  Log out </button> </a>
	   <div align="right">
  <?php
  if(isset($_SESSION['admname']))
{
  echo " welcome ".$_SESSION['admname']."</font><br>";
}
?>
</div>

  </div>
</body>
</html>
