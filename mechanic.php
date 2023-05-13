<html>
<head>
<title>
Mechanics
</title>
</head>
<body>
<?php
  
 include 'mysqlconn.php';
  
 if($conn)
{
  $sql="select*from mechanics";
  $table=mysqli_query($conn,$sql);
  if($table&&mysqli_affected_rows($conn))
  {
    $count1=mysqli_query($conn,"select count(*)from mechanics");
    echo "<center><table border=1><tr><th colspan=6><center> Mechanics </center></th></tr>";
    echo "<tr><td>Id</td><td>Name</td><td>Phone</td></tr>";
   while($tablearray = mysqli_fetch_array($table)){
               echo "<tr>";
               echo "<td>" . $tablearray['mid'] . "</td>";
               echo "<td>" . $tablearray['name'] . "</td>";
               echo "<td>" . $tablearray['phn'] . "</td>";
            echo "</tr>";
       }
     }
     else
     {
       echo"error found";
     }
   echo $tablearray[6];
   }else{ die("could not connect:".mysqli_error());}
mysqli_close($conn);
?>
</body>
</html>
