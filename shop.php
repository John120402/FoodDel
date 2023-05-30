<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");

$users_data = check_login($con);

$sql = "SELECT * FROM products";
$all_products = $con->query($sql);
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Shop</title>
    <link rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: black;
}


main{
  max-width: 1500px;
  width: 85%;
  margin: 30px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: auto;
  transform: translateX(-5%);
}

.card{
text-align: left;
background-color: #24262b;
border: 2px solid white;;
margin-left: 10%;
width: 70%;
height: 52vh;
}

main.card{
  max-width: 300px;
  flex: 1 1 210px;
  text-align: left;
  height: 400px;
  border: 1px solid lightgray;
  margin: 20px;
}

.card .image img{
  width: 25%;
  height: 30vh;
  float: left;
  border: 1px solid white;
  position: absolute;
  transform: translate(-165%, 0%);
}

.image img{
    margin-top: 3%;
    margin-left: 45%;
}

main .card .caption{
  padding-left: 1em;
  text-align: left;
  line-height: 3em;
  height: 25%;
}

main .card .caption .product_name{
font-size: 30px;
-webkit-text-stroke: .5px white;
}

main .card .caption .product_price{
font-size: 30px;
color: white;
margin-top: 1%;
transform: translate(45%, 70%);
-webkit-text-stroke: 1.3px white;
}

.name{
height: 15vh;
width: 60%;
margin-left: 40%;
padding: 30px;
}

button{
  position: absolute;
  margin-top: 21%;
  transform: translate( 55%, -160%);
  width: 15%;
  height: 7vh;
  font-size: 20px;
  text-align: center;
  text-decoration: underline;
}

button:hover{
  background-color: yellowgreen;
  color: #ffffff;
}


</style>
</head>
<body>

<?php
include_once 'head.php';
?>

<main>

<?php
while($row = mysqli_fetch_assoc($all_products)){


?>


  <div class="card" style="margin-bottom: 10%;">

<div class="image">

  <img src="<?php echo $row["product_img_name"];  ?>">

</div>

<div class="caption">
  <div class="name">
  <p style="width: 100%; margin-left: 3%;" class="product_name"><b style="color: darkslategrey;"><?php echo $row["product_name"];  ?></b></p>
  </div>
  <p class="product_price"><b style="color: darkslategrey;">Php <?php echo $row["product_price"];  ?></b></p>
  <p style="color: black; position: absolute; transform: translate(88%, 60%);   width: 35%; ">Details: <?php echo $row["product_details"]; echo '.' ?></p></div>

<a href="thankyou.php"><button class="Order"> Order now</button></a>

  </div>






<br>
<br>
<br>
<br>
<?php



}
?>

</main>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;&display=swap');


  *{
    margin: 2;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

 .container{
  max-width: 1170px;
  margin: auto;
 }

 .row{
   display: flex;
   flex-wrap: wrap;

 }
 ul{
  list-style: none ;
 }

 .footer{
  background-color: #24262b;
  border-top: 1px solid white;
  padding: 70px 0;
  height: 55vh;
 }

 .footer-col{
width: 25%;
padding: 0 15px;
 }

 .footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;

 }

 .footer-col h4::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -10px;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
 }

 .footer-col ul li:not(:last-child){
  margin-bottom: 10px;
 }

 .footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: #ffffff;
  display: block;
  transition: all 0.3s ease;
 }

 .footer-col ul li a:hover{
  color: darkslategrey;
  padding-left: 8px;
  text-decoration: underline;
 }

 .footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
  text-decoration: none;
 }

 .footer-col .social-links a:hover{
  background-color: #ffffff;
  text-decoration: underline;

 }
 
  </style>
<footer class="footer">
  <div class="container">
   <div class="row">

     <div class="footer-col">
       <h4>About us</h4>
       <ul>
         <p>To serve and give the best services we had, for you to experience our food delecacies.</p>
         <br>
         <p>Code licensed FBI, food BY 1.0</p>
         <br>
         <p>Currently v1.1.0 alpha1.</p>
       </ul>
     </div>

     <div class="footer-col">
       <h4>Links</h4>
       <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="Notifications.php">Notifications</a></li>
         <li><a href="Help.php">Get Help</a></li>
       </ul>
     </div>

     <div class="footer-col">
      <h4>Settings</h4>
       <ul>
        <li><a  href="Personal.php">Personal Information</a></li>
        <li><a  href="Orders.php">View Orders</a></li>
        <li><a  href="History.php">Order History</a></li>
        <li><a  href="About us.php">About us</a></li>
        <li><a  href="Login.php">Log out</a></li>
        <li><a  href="ContactS.php">Contact Services</a></li>
       </ul>
     </div>

     <div class="footer-col">
       <h4>Follow us on:</h4>
       <div class="social-links">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-tiktok"></i></a>
       </div>
     </div>
    
   </div>

  </div>
</footer>


</html>