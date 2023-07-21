<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>

h5{
    color:white;
}

</style>

</head>

<body>


<div class="container mt-5">
<div class="row">
<div class="row">
  <div class=" col-sm-3">
    <div class="card bg-info">
      <div class="card-body">
        <h5 class="card-title">Total client</h5>
        <?php
    $conn=mysqli_connect("localhost","root","","elearning");
    $cmd="select count(name) AS total from registration";

    $result=mysqli_query($conn,$cmd);
    $value=mysqli_fetch_assoc($result);
    $num_rows=$value['total'];

    echo "<h5>$num_rows</h5>";



?>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card bg-info">
      <div class="card-body">
      <h5 class="card-title">Total product</h5>
        <?php
    $conn=mysqli_connect("localhost","root","","elearning");
    $cmd="select count(name) AS total from product";

    $result=mysqli_query($conn,$cmd);
    $value=mysqli_fetch_assoc($result);
    $num_rows=$value['total'];

    echo "<h5>$num_rows</h5>";
    ?>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card bg-info">
      <div class="card-body">
      <h5 class="card-title">Total product sold</h5>
        <?php
    $conn=mysqli_connect("localhost","root","","elearning");
    $cmd="select count(pdt_id) AS total from cart";

    $result=mysqli_query($conn,$cmd);
    $value=mysqli_fetch_assoc($result);
    $num_rows=$value['total'];

    echo "<h5>$num_rows</h5>";
    ?>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card bg-info">
      <div class="card-body">
      <h5 class="card-title">Total profit</h5>
        <?php
    $conn=mysqli_connect("localhost","root","","elearning");
    $cmd="select product.*,cart.* from cart 
    join product on cart.pdt_id=product.pdt_id ";
    $result=mysqli_query($conn,$cmd);
    // $value=mysqli_fetch_assoc($result);
    // $num_rows=$value['total'];
    $total_price=0;
    while($row=mysqli_fetch_assoc($result)){
      $price=$row['price'] ; 
      $total_price+=$price; 

    }

    echo "<h5>$total_price</h5>";

  
    ?>
    
   
  </div>
</div>

</div>
</div>
</div>
</div>

</div>
</div>








 




</body>
</html>

