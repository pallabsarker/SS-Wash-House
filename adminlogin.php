<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="apStyle.css">
  <?php include 'apLink.php' ?>
  <?php include 'menu.php';?>
</head>
<body>

  <?php

$con = mysqli_connect('localhost','root');
/*if($con){
  echo "Connection success";
}else echo "no connection"*/

$db = mysqli_select_db($con,'whms');

if(isset($_POST['submit'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $sql = "select * from adminlogin where user = '$username' and pass = '$password'";
  $query = mysqli_query($con,$sql);

  $row = mysqli_num_rows($query);
    if($row == 1){
      $_SESSION['user'] = $username;
      header('location:billing.php');
    }else{
      ?>
      <script>
        alert("Incorrect Email Address or Password");
      </script>
    <?php
    
  }
}

?>

  <header>
    <div class = "container center-div shadow">
      <div class = "heading text-center mb-5 text-uppercase text-white">ADMIN LOGIN</div>

      <div class = "container row d-flex flex-row justify-content-center mb-5">
        <div class = "admin-form shadow p-5">
          <form action = "" method = "POST">
            <div class = "form-group">
              <label>Email address</label>
              <input type="Email" name="user" value="" class = "form-control" autocomplete="off" required>
            </div>
            <div class = "form-group">
              <label>Password</label>
              <input type="Password" name="pass" value="" class = "form-control" autocomplete="off" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now  </button>
          </form>
          
        </div>
      </div>
    </div>
  </header>


</body>
</html>