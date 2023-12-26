<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <style>
    .first {
      display: flex;
      margin-left: 10px;


      flex-direction: row;
      justify-content: space-between;
    }

    #abc {
      font-size: 22px;
      font-weight: bold;
      font-family: Arial, sans-serif;
      color: blue;
      align-content: center;
    }

    #xyz {
      margin: 20px;
    }
  </style>
  <header>
    <div class="first">
      <img id="def" src="pcet.jpg" alt="pcet" width="120px">
      <p id="abc">PIMPRI CHINCHWAD EDUCATION TRUST's HOSTEL <br> HANDLED & MANAGED BY ZOLO</p>
      <img id="xyz" src="zolo.jpg" alt="zolo" width="100px">
    </div>
  </header>

  <div class="nav">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="registration.html">Register</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="feedback.php">Feedback</a></li>
    </ul>
  </div>

  <main>
    <form name="loginform" method="post" onsubmit="formValidation()">
      <label for="email"><b>Email</b></label>
      <input type="email" id="email" placeholder="Enter email" name="email" required="true"
      ><br><br>
      <label for="password"><b>Password</b></label>
      <input type="password" id="password" placeholder="Enter password" name="password" required="true"
       ><br><br>
      <label for="Branch">Branch</label>
      <select name="Branch" id="engineering">
        <option value="Computer">Computer</option>
        <option value="IT">IT</option>
        <option value="E&TC">E&TC</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Civil">Civil</option>
      </select>
      <br><br>
      <button type="submit">Login</button><br>
    </form>
    
  </main>
  <footer>
    &copy; All rights reserved.
  </footer>
</body>

</html>
<?php

if(isset($_POST["email"])&&isset($_POST["password"])){

$email=$_POST["email"];
$password_hash=$_POST["password"];


$conn=mysqli_connect("127.0.0.1:3307","root","","hostel");
if(!$conn){
    die("Not connected".mysqli_connect_error());

}
else
{
    echo "Connected";
    $sql="INSERT INTO `hostel1`(`email`, `password`) VALUES ('$email','$password_hash')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script type ="text/JavaScript">';   
        header("Location:feedback.php");
        echo '</script>';
        
        
      
    }
    else{
        echo "Insertion failed";
    }

}

}
else{
    echo '<script type ="text/JavaScript">';  
        echo 'alert("Insert your login details so that you are eligible to give feedback")';  
        echo '</script>';
}





?>