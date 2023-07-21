<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

h5{
    color:white;
}
i{
 color: white;
 margin-left:5px;
}
nav{
  background-color:#03dac5;
  height:12vh;
  font-family: 'Abril Fatface', cursive;

  

}
img{
    height:20vh;
    width:50%;
  }
  nav a{
  margin-left:5px;
  color:white;
}
.view{
  color:white;
  /* background:#03dac5; */
  padding:8px;
  border-radius:5px;
  text-decoration:none;
}
.view:hover{
  color:#03dac5;
  background:white;
  padding:8px;
  border-radius:5px;
}

.link{
  margin-left:400px;
}
.link a{
  margin-left:26px;
}
</style>

</head>

<body>



<nav class="navbar ">
  <div class="container-fluid">
  <i class="fa-solid fa-book fa-4x , fa-4x"><a class="navbar-brand">Elearning</a></i>
  <div class='link'>
  <a class='view' href='viewcart.php'>View products</a>
  <a class='view' href='client_view.php'> products</a>
  <a class='view' href='order_details.php'>Order details</a>

  
 
</div>



  <!-- <h4>Product page</h4> -->
    
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>



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

