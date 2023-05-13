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
  $sql="select*from reg_user";
  $table=mysqli_query($conn,$sql);
  if($table&&mysqli_affected_rows($conn))
  {
    $count1=mysqli_query($conn,"select count(*)from reg_user");
    echo "<center><table border=1><tr><th colspan=6><center> REGISTERED USERS </center></th></tr>";
    echo "<tr><td>user id</td><td>username</td><td>userpass</td><td>userphno</td><td>E-mail</td></tr>";
   while($tablearray = mysqli_fetch_array($table)){
               echo "<tr>";
               echo "<td>" . $tablearray['userid'] . "</td>";
               echo "<td>" . $tablearray['username'] . "</td>";
               echo "<td>" . $tablearray['pass'] . "</td>";
               echo "<td>" . $tablearray['phn'] . "</td>";
               echo "<td>" . $tablearray['email'] . "</td>";
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
