<html>
<head>
<title>
users
</title>
</head>
<body>
<?php
  
 include 'mysqlconn.php';
  
 if($conn)
{
  $sql="select*from feedback";
  $table=mysqli_query($conn,$sql);
  if($table&&mysqli_affected_rows($conn))
  {
    $count1=mysqli_query($conn,"select count(*)from feedback");
    echo "<center><table border=1><tr><th colspan=6><center> Feedback </center></th></tr>";
    echo "<tr><td>Name</td><td>email</td><td>Message</td></tr>";
   while($tablearray = mysqli_fetch_array($table)){
               echo "<tr>";
               echo "<td>" . $tablearray['name'] . "</td>";
               echo "<td>" . $tablearray['email'] . "</td>";
               echo "<td>" . $tablearray['message'] . "</td>";
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
