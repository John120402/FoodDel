<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
   <head>
     <title>Food Delivery</title>
     
     <link rel="stylesheet" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="index.js" defer></script>
     <style type="text/css">

      
  .card{
    background-color: grey;
    width: 90%;
    height: auto;
    margin-top: 10%;
    padding: 5px 5px;
    border: 1px solid black;
  }

  .image-box{
    width: 100%;
    height: 30vh;
  }
  a:hover {
  text-decoration: underline;
}

body {
  background-image: url(bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: 100vh;
  width: 100%;
}

.sticky-top {
 background-color: rgba(16, 160, 160);
 border-bottom: 2px solid white;
 margin-bottom: 2%;
 height: 20vh;
}

.div1 {
  position: relative;
  text-align: center;
  width: 60%;
}

 .div1 img{
  border-radius: 80px;
  position: absolute;
  transform: translate(-370%, 10%);
 }


.div61{
  margin-top: 5%;
  margin-left: 2.5%;
  margin-right: 1%;
  opacity: 100%;
  margin-bottom: 5%;
}

.top{
  font-family: 'Times New Roman', Times, serif;
  position: absolute;
  transform: translate(270%, 120%);
  width: 27%;
  font-size: 25px;
}

  .top a {
    margin-bottom: 2px;
    color: black;
    font-weight: 450;
    font-size: 23px;
    width: 22%;
    text-decoration: none;
    padding: 2px 0px;
  }

  .top a:hover {
    color: rgb(255, 255, 255);
    width: 22%;
    text-decoration: underline;
    color:white;
  }
  
  .drop {
    font-family: 'Times New Roman', Times, serif;
    font-size: 25px;
    color: black;
    padding: 3px 2.5px;
    background-color: grey;
    height: 34vh;
    border-radius: 10px;
    border: 1px solid black;
  }

.drop a{
  font-size: 25px;
  padding: 2.5px;
  color: black;
  width: 27%;
  border: none;
  text-decoration: none;
}

.drop a:hover{
  color:white;
  width: 27%;
  border: none;
  padding: 0px 4px;
}


  .name{
    font-size: 35px;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
    color:white;
    width: 35%;
    position: absolute;
    top: 54%;
    left: 50%;
    transform: translate(-90%, -145%);
    margin-top: 2%;
  }

.tag{
width: 70%;
text-align: center;
margin-top: 10%;
margin-left: 13%;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-style: italic;
font-weight: bold;
font-size: 30px;
}

.btn{
  margin-top: 5%;
  height: 7vh;
  width: 20vh;
  font-size: 20px;
  text-align: center;
  padding: 8px 0px;
   background-color: darkslategrey;
}

.shop{
 color:white;
 font-size: 27px;
 width: 20%;
 height: 8vh;
 background-color: yellowgreen;
 border-radius: 50px;
 text-align: center;
 margin-top: 5%;
 margin-left: 37.5%;
 padding: 4.5px 0px;
 border: 1.5px solid black;
}

.shop a{
font-size: 27px;
text-align: center;
text-decoration: none;
font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
color: #ffffff;
margin-top: 1%;
}

.shop:hover{
  background-color: orange;
  font-size: 27px;
  text-align: center;
  color: black;
  text-decoration: underline;
}

.shop a:hover{
text-decoration: underline;
color: black;
background-color: orange;
}


      </style>
        </head>
        <body>
        
          <div class="sticky-top">
        

              <div class="div1">
                  <img src="logo.png" alt="your image"  width="100" height="100">
              </div>        

        
              <div class="top"> 
                          <a style="margin-right: 4%;" href="index.php">Home</a>
                          <a style="margin-right: 4%;" href="Notifications.php">Notification</a>
                          <a style="margin-right: 4%;" href="Help.php">Help</a>
                          <a href="#" role="button" data-bs-toggle="collapse" data-bs-target="#0" aria-expanded="false" aria-controls="collapseWidthExample">Setting </a> 
              </div>

               <div id="0" class="collapse">
               <div class="drop" style="width: 14%; float: right; margin-right: 2%; margin-top: 6%;" >
                          <a  href="Personal.php">My Profile</a>
                      <br>
                          <a href="Orders.php">View Orders</a>
                      <br>
                          <a href="History.php">Order History</a>
                      <br>
                          <a href="About us.php">About us</a>
                      <br>
                          <a href="logout.php">Log out</a>
                      <br>
                          <a href="ContactS.php">Contact Services</a>      
             </div>
             </div>

             <div class="name">
            Hello there, <?php echo $user_data['Fname']; echo'!';?>
        </div>
                
          </div>
  
<br>
            <div class="tag">
              <p>" Here you can find the food made from high quality ingredients, <br> to ensure to you the best taste ever. "</p>
              <br>
              <p>Try our products deals now!</p>
            </div>
               
                
                  <a style="text-decoration: none;" href="shop.php"><div class="shop">Shop now!</div></a>

        </body>     
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>About us</title>
    <link rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
h1{
  color: black;
  font-size: 30px;
  font-weight: 50%;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;&display=swap');


body {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #24262b;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
  }
  

  h4{
margin-left: 12%;
  }

  .break{
    margin-left: 10%;
    width: 56%;
  }
  
 
  .div1 h2 {
    position: absolute;
    left: 5%;
    transform: translate( -10%, -170%);
    font-size: 25px;
  }

  *{
    margin: 2;
    padding: 0;
    box-sizing: border-box;
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
 ul p{
  list-style: none ;
  color: #ffffff;
 }

 .footer{
  border-top: 2px solid white;;
  margin-top: 10%;
  background-color: #24262b;
  padding: 40px 0;
  height: 43vh;
  opacity: 50%;
  border-bottom: 2px solid white;
 }

 .footer-col{
width: 25%;
padding: 0 10px;
 }

 .footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 30px;
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
  color: #24262b;
  background-color: #ffffff;
  text-decoration: underline;
 }
 
</style>
</head>
<body>


 <footer class="footer">
  <div class="container">
   <div class="row">

     <div class="footer-col">
       <h4>About us</h4>
       <ul>
         <p>To serve and give the best services we had, for you to experience our food delecacies.</p>
         <p>Code licensed FBI, food BY 1.0</p>
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
      <h4>Setting</h4>
       <ul>
        <li><a href="Personal.php">Personal Information</a></li>
        <li><a href="Orders.php">View Orders</a></li>
        <li><a href="History.php">Order History</a></li>
        <li><a href="About us.php">About us</a></li>
        <li><a href="Login.php">Log out</a></li>
        <li><a href="ContactS.php">Contact Services</a></li>
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

</body>
</html>