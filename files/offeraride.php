<?php

$con = mysqli_connect("localhost","root","","stakekar");
if($con)
    echo "connection build";
else
    echo "connection not build";
$name = $_POST['name'];
$eid = $_POST['email'];
$pp= $_POST['Pickup'];
$df = $_POST['Dropoff'];
$city = $_POST['city'];
$date = $_POST['date'];
$time = $_POST['time'];
$cap = $_POST['capacity'];
$ct = $_POST['cost'];
$mn = $_POST['number'];

$query="INSERT INTO offer_a_ride VALUES('$name','$eid','$pp','$df','$city','$date','$time','$cap','$ct','$mn')";

if(!mysqli_query($con,$query)){
    echo "Data has not saved"; 
}
else
{
    header("Location:userspage.php");
}

?>