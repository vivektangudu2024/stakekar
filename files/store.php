<?php

$con = mysqli_connect("localhost","root","","stakekar");
session_start();
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query="INSERT INTO sign_up_form VALUES('$name', '$password', '$email')";

if(!mysqli_query($con,$query)){
    echo "Data has not saved"; 
}
else
{
    $_SESSION['us']=$name;
    header("Location:form.php");
}
?>