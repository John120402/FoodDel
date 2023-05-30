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
    height: 100vh;
    background-color: #24262b;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
  }
  
  .break{
    margin-left: 10%;
    width: 56%;
  }
  
  .box{
    margin-top: 5%;
    width: 70%;
    height: 100%;
    border-width: 1cm;
    border-color: black;
    background-color: white;
    border: 2px solid;
    border-color: #000000;
  }
  
  .div1{
   position: relative;
   width: 100%; 
   font-family: 'Times New Roman', Times, serif;
  }
  
  .div1 a{
    color: rgb(0, 0, 0);
    font-size: 30px;
   }
   
   .div1 a:hover{
    color: grey;
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

 .footer{
  background-color: #24262b;
  border-radius: 5px;
  padding: 70px 0;
  height: 87vh;
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
  color: #24262b;
  background-color: #ffffff;
  text-decoration: underline;
 }
 
</style>
</head>
<body>

  <div class="div1">
    <a style="text-decoration: none;" href="index.php"><img src="https://img.icons8.com/material-rounded/256/home.png" alt="" width="42" height="45"></a>
    <h2><a href="index.php">Home</a></h2>
     <hr class="dropdown-divider">
 </div>

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

   <hr class="dropdown-divider">
  </div>
</footer>

</body>
</html>