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
    <title>Personal Information</title>
    <link rel="stylesheet" >
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

     <style type="text/css">
  
h1{
  color: black;
  font-size: 30px;
  font-weight: 50%;
}

body {
  background-image: url(profile.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  height: auto;
}

.break{
  margin-left: 10%;
  width: 80%;
  margin-bottom: 2%;
}

.box{
  width: 100%;
  height: 150vh;
  border-radius: 25px;
  border: 2px solid black;
  margin-top: 5%;
  margin-bottom: 5%;
  background-color: rgba(255, 255, 255, 0.3);
}

.div1{
  position: relative;
  width: 100%;
  font-family: 'Times New Roman', Times, serif;
}

.div1 a{
  color: rgb(255, 255, 255);
  font-size: 30px;
 }

 .div1 a:hover{
    color: grey;
 }
 
.div1 h2 {
  position: absolute;
  left: 5%;
  transform: translate( -10%, -200%);
  font-size: 25px;
}
 
.div2{
  float: left;
  margin-left: 5%;
  padding: 5px 5px;
  width: 64%;
  color: rgb(255, 255, 255);
  font-size: 30px;
  font-family: 'Times New Roman', Times, serif;
  margin-bottom: 3%;
}

.div3{
  float: left;
  margin-left: 10%;
  width: 80%;
  padding: 3px 5px;
  color: black;
  font-size: 25px;
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
 }

 .box1{
   background-color: rgba(255, 255, 255, 0.5);
   border-radius: 10px;
   border: 1px solid black;
   width: 45%;
   float: left;
   margin-left: 2%;
 }

 .box2{
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 10px;
  border: 1px solid black;
  width: 45%;
  float: right;
  margin-right: 2%;
 }


 .button a {
  position: absolute;
  transform: translate(200%, 100%);
  color: black;
  font-size: 25px;
  background-color: darkslategray;
  padding: 10px 10px;
  border-radius: 10px;
  border: 2px solid black;
  }

.button a:hover{
  color: white;
}
 strong{
  font-size: 35px;
 }


</style>
</head>
<body>

  <div class="div1">
    <a style="text-decoration: none;" href="index.php"><img src="https://img.icons8.com/material-rounded/256/home.png" alt="Home Icon" width="42" height="45"></a>
    <h2><a href="index.php">Home</a></h2>
     <hr class="dropdown-divider">
 </div>

<div class="box">

<div class="div2">
  <h1> Personal Information</h1>
  <hr class="dropdown-divider">
</div>

<div class="box1">
  <br>
  <br>
  <br>
  <div class="div3">
<strong> First Name : </strong><?php echo $user_data['Fname'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>

  <br>
  <br>

<div class="div3">
<strong> Middle Name :</strong> <?php echo $user_data['Mname'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>

<div class="div3">
<strong> Last Name :</strong> <?php echo $user_data['Lname'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



<div class="div3">
<strong> Birth Date :</strong> <?php echo $user_data['Birthday'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



  <div class="div3">
<strong> Age :</strong> <?php echo $user_data['Age'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



<div class="div3">
<strong> Country :</strong> <?php echo $user_data['Country'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



<div class="div3">
<strong> Region :</strong> <?php echo $user_data['Region'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>
  <br>
  <br>
</div>

  <div class="box2">
    <br>
    <br>
    <br>


    <div class="div3">
<strong> Province :</strong> <?php echo $user_data['Province'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>
  
  <br>
  <br>


<div class="div3" >
<strong> Municipality :</strong> <?php echo $user_data['Municipality'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



<div class="div3">
<strong> Barangay :</strong> <?php echo $user_data['Barangay'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>


  <br>
  <br>



<div class="div3">
<strong> Street :</strong> <?php echo $user_data['Street'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>
 


  <br>
  <br>



<div class="div3">
<strong> Phone number :</strong> <?php echo $user_data['Phone_number'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>
 


  <br>
  <br>



<div class="div3">
<strong> Gender :</strong> <?php echo $user_data['Gender'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>
  


  <br>
  <br>



<div class="div3">
<strong> Email :</strong> <?php echo $user_data['Email'];?>
</div>

<div class="break">
  <hr class="dropdown-divider">
  </div>



  <br>
  <br>
<br>
  <br>

<div class="button">
  <a href="edit-profile.php" type="button">Edit profile</a>
</div>
  </div>




</body>
</html>
