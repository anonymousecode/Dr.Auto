<?php
$db="dr.auto";
$conn=mysqli_connect("localhost","root","",$db);
if($conn)
{
$sql1="select*from service_booking";
$service=mysqli_query($conn,$sql1);
$sql2="select*from on_road";
$onroad=mysqli_query($conn,$sql2);
if($service && mysqli_affected_rows($conn))
{
  while($result1=mysqli_fetch_array($service))
  {
    echo"<center><table border=1><tr><th colspan=5><center>SERVICE BOOKING</center></th></tr>";
    echo "<tr><td>Service id</td><td>User name</td><td>User id</td><td>Booking time </td><td>Booking date</td></tr>";
    echo"<tr><td>".$result1['service_id']."</td>";
    echo"<td>".$result1['user_name']."</td>";
    echo"<td>".$result1['user_id']."</td>";
    echo"<td>".$result1['booking_time']."</td>";
    echo"<td>".$result1['booking_date']."</td></tr></table></center><br><bR><br>";
  }
  }
  else {echo"error happened due to service booking table retrieval";}

if($onroad&& mysqli_affected_rows($conn))
{
  while($result2=mysqli_fetch_array($onroad))
  {
    echo"<center><table border=1><tr ><th colspan=6><center>ON ROAD BOOKING</center></th></tr>";
    echo "<tr><td>ON road id</td><td>onroad time</td><td>onroad date</td><td>mobile no </td><td>username</td>
    <td>vehicle  name</td></tr>";
        echo"<tr><td>".$result2['on_road_id']."</td>";
    echo"<td>".$result2['on_road_time']."</td>";
    echo"<td>".$result2['on_road_date']."</td>";
    echo"<td>".$result2['mobile_no']."</td>";
    echo"<td>".$result2['username']."</td>";
    echo "<td>".$result2['veh_name']."</td></tr></table></center><br><bR><br>";
    }
}else {echo"error happened due to on raod booking table retrieval";}
}else{ die("could not connect:".mysqli_error());}
mysqli_close($conn);
?>
