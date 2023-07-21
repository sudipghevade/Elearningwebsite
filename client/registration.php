<?php

$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$password=$_POST['password'];
// $password=md5($password);


$conn=mysqli_connect("localhost","root","","elearning");

$cmd="insert into registration(name,number,email,password) 
        values('$name','$number','$email','$password')";

$result=mysqli_query($conn,$cmd);
if($result)
{
    header('location:login.html');
}
else
{
    echo "<h2>Mobile/Mail Id is already Registered</h2>";
    echo "<a href='register.html'>Try Again</a>";
}

?>