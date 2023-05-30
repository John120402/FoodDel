<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{

   $username= $_POST['username'];
   $passcode = $_POST['passcode'];
   

   if(!empty($username) && !empty($passcode) && !is_numeric($username))
   {


    $admin_id = random_num(15);
    $id = $admin_id;
    $query = "insert into admin (admin_id, id, username, passcode) 
    values('$admin_id', '$id', '$username', '$passcode')";
    mysqli_query($con, $query);
    
    echo "You have successfully created an account!";
   }

   else
   {
    echo "Invalid username or passcode!";
   }

}
?>



<!DOCTYPE html>
<html>
   <head>
     <title>Signup</title>
     
     <link rel="stylesheet" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
     <style type="text/css">
        
    body{
    background-image: url(bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 90vh;
    color: white;
    }

    .text{
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    margin-top: 2%;
    color: white;
    -webkit-text-stroke: 1.3px #000;
    }

    .top{
    background-color: rgb(195, 231, 142);
    height: 27vh;
    border-bottom: 3px solid white;
    border-top: 1px solid white;
    border-left: 1px solid white;
    border-right: 1px solid white;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    }

    .container{
    width: 50%;
    margin-top: 5%;
    height: 100vh;
    }
    
    .log {
      color: white;
    }

    .log a{
      color: white;
      margin-left: 2%;
    }

    .log a:hover{
    color: grey;
    }
    
    .input-container{
    border-bottom: 1px solid white;
    border-left: 1px solid white;
    border-right: 1px solid white;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    display: inline-block;
    width: 100%;
    }

    form{
      padding: 30px 60px;
      margin-left: 3%;
    }

    .inputbox{
      border-radius: 10px;
      display: inline-block;
      margin-bottom: 3%;
    }



    input[type="submit"] {
      border-radius: 5px;
      color: #ffffff;
      background-color: yellowgreen;
      font-weight: bold;
      font-size: 27px;
      width: 60%;
      height: 8vh;
      margin-bottom: 5%;;
      margin-top: 5%;
      margin-left: 17%;
      text-align: center;
      justify-items: center;
      border: 1px solid rgb(53, 60, 60);
      -webkit-text-stroke: 1px #000;
    }

    .popup{
      width: 30%;
      height: 60vh;
      background-color: yellowgreen;
      border-radius: 5px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, 50%);
      text-align: center;
      padding: 0 30px 30px;
      color: black;
      border: 1px solid black;
  
    }

    .open-popup{
      visibility: hidden;
      top: 50%;
      transform: translate(-50%, 50%);
    }

    .popup img{
      width: 50%;
      height: 22vh;
      margin-top: -10%;
      border-radius: 60%;
      box-shadow: 0 2px 5px rga(0, 0, 0, 0.2);
      border: 2px solid black;
    }

    .popup button{
      background-color: #ffffff;
      border-radius: 5px;
      width: 25%;
      height: 7vh;
      font-size: 20px;
      font-weight: 600;
      padding: 3px 1px;
    }

    .popup button:hover{
      background-color: grey;
      text-decoration: underline;
    }
   </style>
   </head>
        <body>

            <div class="container">
               
                <div class="top">
                <div class="text">
                    <p>Sign Up</p>   
                </div>
                <p style="font-size: 15px; text-align: center; opacity: 80%; color: black;">Register your account by filling up this form. Please fill up all the information required in this section.</p>         
          
              </div>


       <div class="input-container">
       <form method="post">

        <div class="inputbox" >
          <label for="username">Username</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="username" required>
        </div>
<br>
        <div class="inputbox">
          <label for="passcode">Passcode</label>
          <input style="border: 1px solid black;"  type="password"  class="form-control" id="text" name="passcode" required>
        </div>
<br>
        <div class="create">
          <input type="submit" id="button" style="text-decoration: none;" value="Sign up">

        </div>

        <div class="log">
        <p style="margin-left: 20%;">Already have an account? <a style="text-decoration: underline;" href="signin.php"> Click to login</a></p>
        </div>
        </container>
        </body>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          $(document).ready(function(){
            $('input[name="Gender"]').click(function(){
              $('input[name="Gender"]').not(this).prop('checked', false);
            });
          });
          </script>

</html>