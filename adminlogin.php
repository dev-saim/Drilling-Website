<?php

session_start();

if(isset($_SESSION['admin_name'])){
  header('location:adminpage.php');
  exit();
}

if(isset($_POST['submit']))
{
  $name = $_POST['username'];
  $pass = $_POST['password'];
  $tempusername="Admin123";
  $temppassword="Admin@123";

  if(($name==$tempusername) && ($pass==$temppassword))
  {
    $_SESSION['admin_name'] = "admin";
    header('location:adminpage.php');
  }

  if(($name!=$tempusername) && ($pass!=$temppassword))
  {
    echo "<script> alert('Incorrect username or password'); </script>";
  }

  else if(($name!=$tempusername) && ($pass==$temppassword))
  {
    echo "<script> alert('Incorrect username'); </script>";
  }

  else if(($name==$tempusername) && ($pass!=$temppassword))
  {
    echo "<script> alert('Incorrect password'); </script>";
  }


}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Login </title> 
  <link rel="stylesheet" href="style2.css">
</head>
<body>

  <div class="wrapper">
    <h2>Login</h2>
    <form action="" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="username" required>
      </div>
      <div class="input-box">
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="policy">
        <input type="checkbox" value="show-password" name="checkbox_id" onclick="showpassword()" id="checkbox_id">
        <label for="checkbox_id" id="checkboxlabel">Show password</label>
      </div>
     
      <div class="input-box button">
        <input type="submit" name="submit" value="Login Now">
      </div>
    </form>
  </div>
</body>

<script>
  function showpassword() {
    let checkbox = document.getElementById("checkbox_id");
    let temp = checkbox.checked;
    var a = document.querySelector("#password");

    if(temp == true) {
      a.setAttribute("type","text");
    } else {
      a.setAttribute("type","password");
    }
  }
</script>

</html>
