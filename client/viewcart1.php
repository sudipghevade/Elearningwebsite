<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
  <style>
           nav{
  background-color:#E03FE2;
  height:12vh;
}

*{
  font-family: 'Abril Fatface', cursive;
}
nav{
  background-color:#6D6D6D;
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
  .card:hover{
    transform:scal(1.05);
    box-shadow: 0px 0px 10px 5px #03dac5 ;
    background:#6D6D6D;

  }
  .card{
    transform:scal(1.05);
    /* box-shadow: 0px 0px 10px 5px #03dac5 ; */
    background:#6D6D6D;

  }

  .container1{
    background:#21212d!important;
    background-size:300% 300% !important;
    animation-name:color1 ;
    animation-duration:12s ease-in-out infinite !important;
    width:100%;
    height:130vh;
    display:flex;
    justify-content:space-between;
    margin-top:10px;

   


  }
  .card-title{
  color:#03dac5
}
h4{
  font-weight:51px!important;
  color:white;
}

h5{
  font-size:16px;
}
i{
 color: #03dac5;
 margin-left:5px;
}

.view{
  color:white;
  background:#03dac5;
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

<div class='container1'>

<?php




session_start();

$client_id=$_SESSION['stud_id'];
$conn=mysqli_connect("localhost","root","","elearning");
$cmd="select product.*,cart.* from cart 
join product on cart.pdt_id=product.pdt_id 
where stud_id=$client_id";


$sql_obj=mysqli_query($conn,$cmd);
echo "<div class='container'>";
echo "<div class='row'>
<h2>Product cart list</h2>";
echo "<div class='col-10'>";


$total_price=0;

    while($row=mysqli_fetch_assoc($sql_obj))
    {
            
            $name=$row['name'];
            $impath=$row['target_path'];
                 $price=$row['price'] ; 
                 $total_price+=$price; 
                 $actualprice=$row['actualprice'];
                  $pid=$row['pdt_id'];
     
                  echo "
       
                  <div class'shadow1'>
          
                  <div class='card' style='width: 18rem;'>
                  <img src='$impath' class='card-img-top' >
                  <div class='card-body'>
                    <h5 class='card-title'>$name</h5>
                    <h5 class='card-title'>Rs $price</h5>
                    <h5 class='card-title'>Rs $actualprice</h5>
          
                    <a href='addtocart.php?pdt_id=$pid'>
                  <button type='button' btn1 class='btn btn-warning btn-lg'>Add</button></a>
                  </div>
                 </div>
                </div>";
              
                      
              }
              ?>
              </div>
        

        
        
        
        
           
            
    

  

    <!-- <a href='deletecart.php?pdt_id=$pid'>

//     echo "<div class='col-2 secondcol'>";
//     echo "<h4 class='pt-2 color-black'>Total Price=Rs $total_price </h4>";
//     echo "<a href='order_details.php'>
//     <button class='btn btn-success p-3 mt-2'>detail order</button>
//     </a>";

//     // echo "<a href='place_order.php'>
//     //         <button class='btn btn-success p-3 mt-2'>Place order</button>
//     //         </a>";
//     echo "</div>";

   
// echo "</div>";




//     echo "</div>";
//     echo "</div>";

  
    ?> -->
  
</body>
</html>






<!-- ---------------------------------------------------------------------------- -->




    




