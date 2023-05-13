<?php
session_start();
?>
<html>
<head><title> Vehicles </title></head>

<style>

a   {
      text-decoration:none;
	  color:inherit;
    }

button {
           background-color: #00cc66;
		   border: none;
		   color: white;
           padding: 12px 60px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
		   width:65%;
           margin: 4px 45px;
           cursor: pointer;
		}
</style>

<body>
  <br>
  <div class="menu">

      <a href="detbookings.php" target="f3"> <button type="button" > Bookings  </button></a> <br><br>
      <a href="users.php" target="f3"> <button type="button" > Users  </button> </a><br> <br>
	    <a href="" target="f3"> <button type="button" > Mechanics  </button> </a><br><br>
	    <a href="settings.php" target="_top"> <button type="button" > Settings </button> </a>  <br>

  </div>


</body>
</html>
