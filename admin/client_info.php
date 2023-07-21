
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 




  <?php
$conn=mysqli_connect("localhost","root","","elearning");

$cmd="select * from cart where is_ordered=1";

$sql_obj=mysqli_query($conn,$cmd);

echo "<table class='table mt-15'>

<thead>

<tr>
    <th>Order Id</th>
    <th>Client Id</th>
    <th>Product Id</th>
</tr>

</thead>

<tbody>

";

while($row=mysqli_fetch_assoc($sql_obj))
{

    $order_id=$row['id'];
    $client_id=$row['stud_id'];
    $pdt_id=$row['pdt_id'];

    echo "<tr>    
        <td>$order_id</td>
        <td>
            <a href='client_info.php?client_id=$client_id'>$client_id</a>        
        </td>

        <td>
        <a href='client_productdetail.php?pdt_id=$pdt_id'>$pdt_id</a>        
    </td>

     
        
        
    </tr>";

}

echo "</tbody>

</table>";
echo "<a class='goback' href='adminpannel.php'>Go Back</a>";


?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


