<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    .first{
        display: flex;
        margin-left:10px;
        
      
        flex-direction: row;
        justify-content: space-between;
    }
    #abc{
        font-size:22px;
        font-weight: bold;
        font-family: Arial,sans-serif;
        color:blue;
        align-content: center;
    }
    #xyz{
        margin:20px;
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
    <h2>We value your opinion!</h2>
    <form action="#" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required="true"><br><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required="true"><br><br>
        <label for="feedback">Your feedback: </label><br>
        <textarea id="feedback" name="feedback" rows="4" required="true"></textarea>
        <br><br>
        <button type="submit">Submit feedback</button>
    </form>
</main>
<footer>
    &copy; All rights reserved.
</footer>
</body>
</html>
<?php

if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["feedback"])){
$name=$_POST["name"];
$email=$_POST["email"];
$feedback=$_POST["feedback"];

$conn=mysqli_connect("127.0.0.1:3307","root","","hostel");
if(!$conn){
    die("Not connected".mysqli_connect_error());

}
else
{
    echo "Connected";
    $sql="INSERT INTO `hostel`(`name`, `email`, `opinion`) VALUES ('$name','$email','$feedback')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Feedback successfully submitted")';  
        echo '</script>';
    }
    else{
        echo "Insertion failed";
    }

}
}

else{
    echo '<script type ="text/JavaScript">';  
        echo 'alert("Successful Login")';  
        echo '</script>';
}




?>