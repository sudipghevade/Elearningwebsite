<?php


$name=$_POST['name'];
$price=$_POST['price'];
$actualprice=$_POST['actualprice'];


$fileobj=$_FILES['imname'];


date_default_timezone_set('Asia/Kolkata');
$unique_name=date("Y_m_d_H_i_s");

$target_path="../Images/$unique_name.jpg";
move_uploaded_file($fileobj['tmp_name'],$target_path);

$conn=mysqli_connect("localhost","root","","elearning");
$cmd="insert into product(name,actualprice,price,target_path) values('$name',$actualprice,$price,'$target_path')";
$sql_result=mysqli_query($conn,$cmd);

if($sql_result)
{
    header('location:adminpannel.php');
}
else
{
    echo "Upload Failed, check Query=$cmd";
}

?>