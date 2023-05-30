<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $Fname = $_POST['Fname'];
  $Mname = $_POST['Mname'];
  $Lname = $_POST['Lname'];
  $Birthday = $_POST['Birthday'];
  $Age = $_POST['Age'];
  $Country = $_POST['Country'];
  $Region = $_POST['Region'];
  $Province = $_POST['Province'];
  $Municipality = $_POST['Municipality'];
  $Barangay = $_POST['Barangay'];
  $Street = $_POST['Street'];
  $Phone_number = $_POST['Phone_number'];
  $Gender = $_POST['Gender'];


   $Email= $_POST['Email'];
   $Password = $_POST['Password'];
   $Confirm_Password = $_POST['Confirm_Password'];


   if((!empty($Email) && !empty($Password)) && (!is_numeric($Email) && $Confirm_Password == $Password))
   {

  
    $user_id = random_num(15);
    $id = $user_id;
    $query = "insert into users (user_id, id, Fname, Mname, Lname, Birthday, Age, Country, Region, Province, Municipality, Barangay, Street, Phone_number, Gender, Email, Password, Confirm_Password) 
    values('$user_id', '$id', '$Fname', '$Mname', '$Lname', '$Birthday', '$Age', '$Country', '$Region', '$Province', '$Municipality', '$Barangay', '$Street', '$Phone_number', '$Gender', '$Email', '$Password', '$Confirm_Password')";
    mysqli_query($con, $query);
 
    echo "<html>";
    echo "<body>";
    echo "<p style='margin-left: 35%; margin-top: 5%; font-size: 25px;'>You have successfully created an account!</p>";
    echo "<p style='margin-left: 45%; font-size: 25px;'>Login Now!</p>";
    echo "</body>";
    echo "</html>";



   
  }
else if($Confirm_Password != $Password){
  echo "Password does not match!";
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
     <title>Signup</title>
     
     <link rel="stylesheet" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     
     <style type="text/css">
        
    body{
    background-image: url(bg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 200vh;
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
          <label for="Fname">First name</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Fname" required>
        </div>

        <div class="inputbox" style="width: 30%; margin-left: 3%;">
          <label for="Birthday">Birthday</label>
          <input style="border: 1px solid black;"  type="text"  class="form-control" id="text" name="Birthday" required>
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

        <div class="inputbox">
          <label for="Province">Country</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Country" required>
        </div>
      

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Province">Region</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Region" required>
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
<br>
<div class="inputbox" style="margin-bottom: 1%;">
        
          <label for="Gender">Gender</label>     
<br>
        <div class="form-check form-check-inline">
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value=" Male">Male
        </div>
        <div class="form-check form-check-inline">
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value="Female">Female
        </div>
        <div class="form-check form-check-inline" style="margin-bottom: 3%;">
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value="Others">Others
        </div>
        
        </div>
<br>
        <div class="inputbox">
          <label for="Email">Email</label>
          <input style="border: 1px solid black;" type="text"  class="form-control" id="text" name="Email" required>
        </div>
<br>
        <div class="inputbox">
          <label for="Password">Password</label>
          <input style="border: 1px solid black;" type="password"  class="form-control" id="text" name="Password" required>
        </div>

        <div class="inputbox" style="margin-left: 3%;">
          <label for="Confirm_Password">Confirm Password</label>
          <input style="border: 1px solid black;" type="password"  class="form-control" id="text" name="Confirm_Password" required>
        </div>
<br>

        <div class="create">
          <input type="submit" id="button" style="text-decoration: none;" value="Sign up">
        </div>

        <div class="log">
        <p style="margin-left: 20%;">Already have an account? <a style="text-decoration: underline;" href="login.php"> Click to login</a></p>
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