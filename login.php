<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $Email = $_POST['Email'];
  $Password =  $_POST['Password'];

  if (!empty($Email) && !empty($Password)) {
    $query = "select * from users where Email = '$Email' limit 1";
    $result = mysqli_query($con, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        if ($user_data['Password'] === $Password) {
          $_SESSION['user_id'] = $user_data['user_id'];

          header("Location: index.php");
          die;
        }
      }
    }
    $message = "Incorrect username or password!"; 
  } else {
    $message = "Incorrect username or password!" ;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet">
  <style>
    body {
      background-image: url(bg3.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      height: 95vh;
    }

    .div3 {
      margin-left: 16%;
      margin-top: 2%;
      font-size: 30px;
      color: rgb(0 0 0);
    }

    .div4 {
      margin-left: 16%;
      font-size: 30px;
      color: rgb(0 0 0);
    }

    .reset {
      font-size: 20px;
      margin-left: 47%;
      margin-top: 3%;
    }

    .reset a {
      color: black;
      text-decoration: none;
      font-size: 25px;
    }

    .reset a:hover{
      color: white;
      text-decoration: underline;
    }

    .div5 {
      margin-top: 2%;
      margin-left: 16%;
      width: 85%;
    }

    .text {
      font-size: 25px;
      margin-left: 10%;;
    }

    .text a{
      color: black; 
      margin-left: 2%;
    }

    .text a:hover{
      text-decoration: underline;
      color: grey;
    }

    h2 {
      color: black;
      font-size: 40px;
      font-weight: 50%;
    }

    h3 {
      font-size: 18px;
      width: 5%;
    }

    input[type="text"] {
      border:1px solid black;
      border-radius: 5px;
      height: 50px;
      width: 75%;
      font-size: large;
      margin-top: 2%;
    }

    input[type="password"] {
      border:1px solid black;
      border-radius: 5px;
      height: 50px;
      width: 75%;
      font-size: large;
      margin-bottom: 2%;
      margin-top: 2%;
    }

    input[type="submit"] {
      border-radius: 5px;
      color: #ffffff;
      background-color: blue;
      font-weight: 450;
      font-size: 30px;
      width: 75%;
      border: 1px solid rgb(53, 60, 60);
      padding: 4px 10px;
      height: 57px;
    }

    .box {
      width:40%;
      border-radius: 30px;
      margin-left: 30%;
      height: 96vh;
      border: 2px solid white;
    }

    div{
      color: red;
      font-weight: 500;
      font-size: 20px;
      margin-top: 1%;
      margin-left: 10%;
    }
  </style>
</head>

<body>

  <div class="box">
    <br>
    <br>


    <form method="post">
      <div class="div3">
        <label for="Email">Email</label>
        <br>
        <input class="form-control me-4" type="text" placeholder="Email" id="text" name="Email" required>
      </div>

      <br>
      <br>

      <div class="div4">
        <label for="Password">Password</label>
        <br>
        <input class="form-control me-4" type="password" placeholder="Password" id="text" name="Password" required>
      </div>
    

      <?php
    if (isset($message)){
      echo "<div>$message</div>";
    }
    ?>
    
      <div class="reset">
        <a href="Reset.php"> Forgot password? </a>
      </div>

      <br>
      <br>
      <br>

      <div class="div5">
        <input type="submit" id="button" style="text-decoration: none;" value="Login">
      </div>

      <br>
      <div class="text">
    <p style="color: black;" >Doesn't have any account?<a href="signup.php" >Sign up now</a></p>
      </div>


    </form>
  
  </div>
</body>
</html>