<?php
$con=mysqli_connect("localhost","root","","stakekar");
    session_start();
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
 $query=mysqli_query($con,"SELECT * FROM`sign_up_form` WHERE name='$user' AND password='$pass'");
$row=mysqli_num_rows($query);
if($row==true){
    $_SESSION['us']=$user;
    exit(header("Location:form.php"));
}
else
{
    echo "user name or password is incorrect";
}

$con->close();
?>