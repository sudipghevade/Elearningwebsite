<?php

$conn=mysqli_connect("localhost","root","","elearning");


session_start();

$client_id=$_SESSION['stud_id'];
$pid=$_GET['pdt_id'];

$cmd="delete from cart where stud_id=$client_id and pdt_id=$pid";
echo "cmd=$cmd";

$sql_res=mysqli_query($conn,$cmd);
if($sql_res)
{
    header('location:viewcart.php');
}
else
{
    echo "unable to remove from cart .. Try again";
}


?>