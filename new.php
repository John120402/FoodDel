<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{

   $user_name = $_POST['user_name'];
   $password =  $_POST['password'];

   if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
   {

    $user_id = random_num(15);
    $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";
    mysqli_query($con, $query);

    header("Location: login.php");
    die;
   }

   else
   {
    echo "Invalid username or password!";
   }

}
?>



<!DOCTYPE html>
<html>
   <head>
     <title>Food Delivery</title>
     
     <link rel="stylesheet" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
     <style type="text/css">
        
    body{
    background-image: url(https://th.bing.com/th/id/OIP.kJjVf1wclYzvhdRIZlKi8QHaE8?w=270&h=180&c=7&r=0&o=5&pid=1.7);
    background-size: cover;
    background-repeat: no-repeat;
    height: 200vh;
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
    height: 25vh;
    border-bottom: 2px solid rgba(0, 0, 0);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    }

    .container{
    width: 50%;
    margin-top: 5%;
    height: 100vh;
    }

    .input-container{
    background-color: grey;
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    display: inline-block;
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

    .col-md-4{
      display: inline-block;
    }

    input[type="radio"]{
      font-size: 40px;
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
       <form action="">

        <div class="inputbox" >
          <label for="Fname">First name</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Fname" autocomplete="off" required>
        </div>

        <div class="inputbox" style="width: 30%; margin-left: 3%;">
          <label for="Birthday">Birthday</label>
          <input style="border: 1px solid black;" type="text"  type="text"  class="form-control" id="text" name="Birthday" required>
        </div>

        <div class="inputbox" style="width: 15%; margin-left: 3%;">
          <label for="Age">Age</label>
          <input style="border: 1px solid black;"  type="text"  class="form-control" id="text" name="Age" required>
        </div>

        <div class="inputbox">
          <label for="Mname">Middle name</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Mname" required>
        </div>

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Lname">Last name</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Lname" required>
        </div>

        <div class="col-md-4" style="margin-bottom: 3%;">
          <label for="Country">Country</label>
          <select style="border: 1px solid black;" id="Country" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
      
        <div class="col-md-4" style="margin-bottom: 3%; margin-left: 5%;">
          <label for="Country">Region</label>
          <select style="border: 1px solid black;" id="Region" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>

        <div class="inputbox">
          <label for="Province">Province</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Province" required>
        </div>

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Municipality">Municipality</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Municipality" required>
        </div>

        <div class="inputbox">
          <label for="Barangay">Barangay</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Barangay" required>
        </div>

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Street">Street</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Street" required>
        </div>

        <div class="inputbox">
          <label for="Phone_number">Phone number</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Phone_number" required>
        </div>

        <div class="inputbox" style="margin-left: 3%; width: 25%;">
          <label for="OTP">OTP</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="OTP" autocomplete="on" required>
        </div>
<br>
        <div class="inputbox" style="margin-bottom: 1%;">
          <label for="Sex">Sex</label>
        </div>
<br>
        <div class="form-check form-check-inline">
          <input class="btn btn-outline-secondary" type="radio" name="Sex" id="sex1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="btn btn-outline-secondary" type="radio" name="Sex" id="sex2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <div class="form-check form-check-inline" style="margin-bottom: 3%;">
          <input class="btn btn-outline-secondary" type="radio" name="Sex" id="sex3" value="option3">
          <label class="form-check-label" for="inlineRadio3">Prefer not to answer</label>
        </div>

        <div class="inputbox">
          <label for="Email">Email</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Email" required>
        </div>
<br>
        <div class="inputbox">
          <label for="Password">Password</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Password" required>
        </div>

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Confirm_Password">Confirm Password</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Confirm_Password" required>
        </div>
<br>

        <div class="create">
          <input type="submit" id="button" style="text-decoration: none;" value="Sign up">
        </div>

        <p style="margin-left: 20%;">Already have an account? <a style="text-decoration: underline; color: #ffffff;" href="login.php"> Click to login</a></p>

        </container>
        </body>
</html>