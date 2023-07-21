<?php

//Get the cart items from cart table w.r.t client_id
//insert the cart items into orders table
//delete the cart items from cart table w.r.t client_id

//create a field in cart table as is_ordered
//create a fields in cart table ad ordered_date
//update the cart is_ordered=1 w.r.t client_id

$conn=mysqli_connect("localhost","root","","elearning");

session_start();
$client_id=$_SESSION['stud_id'];

//$cur_date=date('Y-m-H');
$cmd="update cart set is_ordered=1 where stud_id=$client_id";

$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    echo "Ordered Place Successfully!!";
    echo "<a href='client_view.php'>Go to Products</a>";
}
else
{
    echo "Couldnt Place Order";
}

?>