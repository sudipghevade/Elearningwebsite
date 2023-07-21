
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
</head>
<style>
    body{
        background:white;
    }
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fira+Sans:ital,wght@1,600&family=Open+Sans&family=Rakkas&family=Secular+One&display=swap');

    *{
        color:#03dac5 !important;
        font-family: 'Abril Fatface', cursive;



    }
img{
    height:55px;
    width:28%;
}

th{
    color:#6D6D6D !important;

}

</style>
<body>
  
<?php

$conn=mysqli_connect("localhost","root","","elearning");

session_start();

$client_id=$_SESSION['stud_id'];
$conn=mysqli_connect("localhost","root","","elearning");
$cmd="select product.*,cart.* from cart 
join product on cart.pdt_id=product.pdt_id 
where stud_id=$client_id";


$sql_obj=mysqli_query($conn,$cmd);

// $cmd="select *  from cart where client_id=$client_id  ";


echo "<table class='table mt-15'>

<thead>

<tr>
    <th>product name</th>
    <th>actual price</th>
    <th>price</th>
    <th>product img</th>
    
</tr>

</thead>

<tbody>

";

$total_price=0;
$actual_totalprice=0;


while($row=mysqli_fetch_assoc($sql_obj))
    {

    // $product=$row['client_id'];
    $product_name=$row['name'];
    $price=$row['price'];
    $actual_price=$row['actualprice'];
    $total_price+=$price; 
    $actual_totalprice+=$actual_price;
    $impath=$row['target_path'];
    $amount_save= $actual_totalprice-$total_price;
    

    

    

    

    echo "<tr>    
     
    <td>$product_name</td>
    <td>  $actual_price</td>
    <td>$price</td>
    <td>    <div class='img1'>
    <img  src='$impath'>

    </div></td>
       
        
    </tr>";

    }



echo "</tbody>

</table>";
echo "<p class='pt-3 mx-4 color-black'>Total Actual Price=$actual_totalprice Rs</p>";

echo "<p class='pt-3 mx-4 color-black'>Total Price=$total_price Rs</p>";
echo "<p class='pt-3 mx-4 color-black'>You saved= $amount_save Rs</p>";





 echo "<a href='place_order.php'>
            <button class='btn btn-success p-3 mx-4 mt-2'>placed order</button>
            </a>";

?>

<!-- <a href='place_order.php'>
            <button class='btn btn-success p-3 mx-4 mt-2'>proceed to payment</button>
            </a> -->
</body>
</html>




