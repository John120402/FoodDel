<?php
session_start();

include("connection.php");
include("func.php");
include("adminfunc.php");

$sql = "SELECT * FROM products";
$all_products = $con->query($sql);

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $product_img_name = $_POST['product_img_name'];
    
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_details = $_POST['product_details'];
    

   if((!empty($product_name) && !empty($product_price)) && !is_numeric($product_name))
   {


    $product_id = random_num(10);
    $id = $product_id;

    $query = "insert into products (product_id, id, product_img_name, product_name, product_price, product_details) 
    values('$product_id', '$id', '$product_img_name', '$product_name', '$product_price', '$product_details')";

    mysqli_query($con, $query);
    

   }
   else
   {
    echo "Please complete all data input field!";
   }
   $message = "Successfully added to the database!";
}
?>


<!DOCTYPE html>
<html>
   <head>
     <title>Admin</title>
     
     <link rel="stylesheet" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
     <style type="text/css">
        
    body{
    background-image: url(bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: auto;
    color: white;
    }

  .inputbox{
width: 80%;
height: auto;
  }

  .submit{
margin-left: 16%;
  }

input[id="button"]:hover{
   background-color: yellowgreen;
}


  .log p a{
    text-decoration: none;
    color: white;
  }

  .log p a:hover{
    text-decoration: none;
    color: black;
  }

td{
  border: 2px solid black;
}

.nav a{
  color: white;
  font-size: 25px;
  position: absolute;
  transform: translate(700%, 50%);
}

.nav a:hover{
  color: darkslategrey;
  font-size: 25px;

}
   </style>
   </head>
        <body>
<div class="nav">
  <a href="logout.php">Go back to login</a>
</div>
        <div class="top">
                <div class="text">
                    <p style="Font-size: 40px; margin-left: 5%; float: left;">Welcome Admin  <p style="Font-size: 40px; float: left; margin-left: 2%; color: yellow; text-decoration:double">"<?php echo $admin_data['username']; ?>"</p></p>   
                </div>
                <br>
                <br>
                <br>
                <br>
 <div class="text2">
                <p style="font-size: 25px; float: left; margin-left: 20%; text-align: center; opacity: 80%; color: white;">Insert New products in this section.               <?php
    if (isset($message)){
      echo "<div>$message</div>";
    }
    ?></p>  
 </div>       
              </div>


        <Table width="10" cellspacing="20" cellpadding="20" style="background-color: white; color: black; margin-left: 3%; border-bottom: 4px solid black; border-left: 4px solid black; border-right: 4px solid black;">
        
<br>
<br>
<br>
<tr>
	<th colspan="100" style="background-color: yellowgreen; color: black; border: 4px solid black; width: 90%">
	<h3 style="text-align: center;">Products Table</h3>
</th>

</tr>

	<th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">product_id</th>
	<th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">id</th>
  <th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">product_img_name</th>
	<th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">product_name</th>
  <th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">product_price</th>
	<th style="border: 4px solid black; background-color: darkslategrey; color: #ffff;">product_details</th>
  
  


<main>

<?php
while($row = mysqli_fetch_assoc($all_products)){


?>
  <tr>
    
	<td><p style="font-style: italic;"><?php echo $row["product_id"];  ?></p></td>
	<td><p style="font-style: italic;"><?php echo $row["id"];  ?></p></td>
  <td><p style="font-style: italic;"><?php echo $row["product_img_name"];  ?></p></td>
	<td><p style="font-style: italic;"><?php echo $row["product_name"];  ?></p></td>
  <td><p style="font-style: italic;"><?php echo $row["product_price"];  ?></p></td>
	<td><p style="font-style: italic;"><?php echo $row["product_details"];  ?></p></td>
    
</tr>
<?php



}
?>

</main>

<br>

</Table>

<br>
<br>
<br>
<br>
<br>
        
            <div class="container">
               
       <div class="input-container" style="width: 35%; position: absolute; transform:translate(155%, -165%);">
       <form method="POST">

        <div class="inputbox" >
          <label for="product_img_name">Product Image Name</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" placeholder="Please attach file name of image ( include .jpeg/.jpg )" name="product_img_name">
        </div>

<br>

        <div class="inputbox">
          <label for="product_name">Product Name</label>
          <input style="border: 1px solid black;"  type="text" class="form-control" id="text" name="product_name">
        </div>

<br>

        <div class="inputbox">
          <label for="product_price">Product Price</label>
          <input style="border: 1px solid black;"  type="text"  class="form-control" id="text" name="product_price">
        </div>

<br>

        <div class="inputbox">
          <label for="product_details">Product Details</label>
          <input style="border: 1px solid black; " type="text"  class="form-control" id="text" name="product_details">
        </div>

      <br>  
        
        <div class="submit">
          <input style="border-radius: 5px; width: 25%; margin-left: 50%;" type="submit" id="button" style="text-decoration: none;" value="Insert">
        </div>

<br>

        <div class="log">
        <p >Want to update an product?<a style="text-decoration: underline;" href="update.php"> Click to update</a></p>
        <p >Want to delete an product?<a style="text-decoration: underline;" href="delete.php"> Click to delete</a></p>
        <br>
        <br>
        </div>
       </form>
       </div>
            </div>

        </body>
</html>

