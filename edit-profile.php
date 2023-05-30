<?php
session_start();
$_SESSION;

include("connection.php");
include("functions.php");


$user_data = check_login($con);

   if((!empty($Email) && !empty($Password)) && (!is_numeric($Email) && $Confirm_Password == $Password))
   {
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
  <title>Edit Profile</title>
</head>
<style>
  .div1 a{
  color: black;
  font-size: 30px;
 }

 .div1 a:hover{
    color: darkslategrey;
 }
 
.div1 h1 {
  position: absolute;
  left: 5%;
  transform: translate( -10%, -180%);
  font-size: 25px;
}
 
h2{
  margin-left: 41.5%;
  font-size: 45px;
}
form{
  background-color: darkslategrey;
  border-radius: 20px;
  width: 75%;
  margin-left: 12%;
}
  input[type="text"]{
    width: 90%;
    height: 4vh;
    border-radius: 5px;
  }
  input[type="password"]{
    width: 90%;
    height: 4vh;
    border-radius: 5px;
  }
  input[type="email"]{
    width: 75%;
    height: 4vh;
    border-radius: 5px;
  }
</style>
<body>
<div class="div1">
    <a style="text-decoration: none;" href="index.php"><img src="https://img.icons8.com/material-rounded/256/home.png" alt="Home Icon" width="42" height="45"></a>
    <h1><a href="index.php">Home</a></h1>
     <hr class="dropdown-divider">
 </div>

  <h2>Edit Profile</h2>
  
  <form action="edit-profile.php" method="POST">
  <br>
<br>
<br>
<br>
  <div class="input" style="float: left; width: 25%; margin-left: 13%;">
    <label for="Fname">First Name: <?php echo $user_data['Fname'];?></label><br>
    <input type="text" name="Fname" id="Fname" required><br><br>
  </div>

  <div class="input" style="float: left; width: 25%;">
    <label for="Mname">Middle Name:</label> <?php echo $user_data['Mname'];?></label><br>
    <input type="text" name="Mname" id="Mname" required><br><br>
    </div>
    
    <div class="input" style="float: left; width: 25%;">
    <label for="Lname">Last Name:</label> <?php echo $user_data['Lname'];?></label><br>
    <input type="text" name="Lname" id="Lname" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    <div class="input" style="float: left; width: 25%; margin-left: 13%;">
    <label for="Birthday">Birthday:</label> <?php echo $user_data['Birthday'];?></label><br>
    <input type="text" name="Birthday" id="Birthday" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Age">Age:</label> <?php echo $user_data['Age'];?></label><br>
    <input type="text" name="Age" id="Age" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Country">Country:</label> <?php echo $user_data['Country'];?></label><br>
    <input type="text" name="Country" id="Country" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    <div class="input" style="float: left; width: 25%; margin-left: 13%;">
    <label for="Region">Region:</label> <?php echo $user_data['Region'];?></label><br>
    <input type="text" name="Region" id="Region" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Province">Province:</label> <?php echo $user_data['Province'];?></label><br>
    <input type="text" name="Province" id="Province" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Municipality">Municipality:</label> <?php echo $user_data['Municipality'];?></label><br>
    <input type="text" name="Municipality" id="Munucipality" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    <div class="input" style="float: left; width: 25%; margin-left: 13%;">
    <label for="Barangay">Barangay:</label> <?php echo $user_data['Barangay'];?></label><br>
    <input type="text" name="Barangay" id="Barangay" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Street">Street:</label> <?php echo $user_data['Street'];?></label><br>
    <input type="text" name="Street" id="Street" required><br><br>
    </div>

    <div class="input" style="float: left; width: 25%;">
    <label for="Phone_number">Phone number:</label> <?php echo $user_data['Phone_number'];?></label><br>
    <input type="text" name="Phone_number" id="Phone_number" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    <div class="input" style="float: left; width: 25%; margin-left: 13%;">
    <label for="Gender">Gender</label>     
<br>
        <div class="form-check form-check-inline" style="float: left; width: 25%;">
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value=" Male">Male
        </div>
        <div class="form-check form-check-inline"style="float: left; width: 25%;" >
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value="Female">Female
        </div>
        <div class="form-check form-check-inline" >
          <input class="btn btn-outline-secondary" type="checkbox" name="Gender" value="Others">Others
        </div>
        </div>


        <div class="input" style="float: left; width: 30%;">
    <label for="E">Email:</label> <?php echo $user_data['Email'];?></label><br>
    <input type="email" name="Email" id="Email" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    <div class="input" style="float: left; width: 20%; margin-left:13%;">
    <label>Password:</label><br>
    <input type="password" name="password" id="password" required><br><br>
    </div>
    <br>
    <br>
    <br>
<br>
    <div class="input" style="float: left; width: 20%; margin-left:13%;">
    <label for="Passeword">New password:</label>
    <input type="password" name="password" id="password" required><br><br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="input" style="float: left; width: 20%; margin-left:13%;">
    <label for="Confirm_password">Confirm password:</label>
    <input type="password" name="password" id="password" required><br><br>
    </div>
<br>
<br>
<br>
<br>
    
    <input style="float: left; width: 15%; margin-top: 1%; height: 3.5vh; background-color: yellowgreen; margin-left: 13%; border-radius: 5px;" type="submit" value="Update Profile">
    <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="reminder" style="width: 45%; font-style:italic; font-size: 30px; position: absolute; transform: translate(60%, -200%);">
  <p>Reminder! Please fill out all the form by inputting the correct data. If you dont want to change the data just copy the existing data in the form.</p>
</div>
  </form>
  <br>
<br>
<br>
<br>
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