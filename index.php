<?php 


include "config.php";


if (isset($_REQUEST['submit'])) {

  $username   = $_POST['username'];
  $age        = $_POST['age'];
  $password   = $_POST['password'];
  $check      = $_POST['check'];
  $created_at = date("Y-m-d H:i:s");

  $STH=$DBH->prepare("INSERT INTO users (username,age,password,created_at) VALUES (:username,:age,:password,:created_at)");

  $STH->execute(array(
    ':username'   =>$username,
    ':age'        =>$age,
    ':password'   =>$password,
    ':created_at' =>$created_at
    )
  );

}



# close the connection
$DBH = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "header.php"; ?>


</head>

<body background="bootstrap\image\background.jpg">
  <div class="container" style="padding-top: 80px;">
    <form id ="userform" name="userform" class="form-horizontal well" method = "POST" action="">      
      <!-- <form class="form-horizontal"> -->
      <br>  <br>
      <div class="form-group">
        <label for="inputUsername" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
        </div>
      </div>

      <div class="form-group">
        <label for="inputAge" class="col-sm-2 control-label">Age</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="age" id="inputAge" placeholder="Age">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" value="checked" name="check"> Remember me
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>

    </form>

    <br><br><br>

    <?php

    if (!empty($username) || !empty($age) || !empty($password) || !empty($check)) {
      # code...
      echo "$username" . "<br>";
      echo "$age" . "<br>";
      echo "$password" . "<br>";
      echo md5($password) . "<br>";
      echo "$check" . "<br>";
    }
    ?>

  </div>

  
</body>
<?php include "footer.php"; ?>
</html>