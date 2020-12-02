<?php
  include('dbconfig/config.php');
 ?>


<html>
<head>
    <link rel="stylesheet" href="css/index.css" />
</head>
<body class="body">
    <div class="login-wrap">

        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">

              <form class="" action="" method="post">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="user_name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="psswd">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In" name="sign_in_btn">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                  </form>

                  <?php
                    if (isset($_POST['sign_in_btn'])) {
                      $user_name = $_POST['user_name'];
                      $password = $_POST['psswd'];
                      if($user_name=="" || $password==""){
                        echo '<script>alert("Enter username and password..!!")</script>';
                      }
                      else{
                      $sql = "SELECT * FROM user where username = '$user_name' && password = '$password'";
                      $query = mysqli_query($conn,$sql);
                      $row = mysqli_fetch_array($query);
                        if ($row['username'] == $_POST['user_name'] && $row['password'] == $_POST['psswd']) {
                        header("Location:land.php");
                        }
                        else {
                          echo '<script>alert("Oops..!! Invalid credentials..!!")</script>';
                        }
                      }
                      }
                  ?>

                   <form class="" action="" method="post">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input type="text"  name="username" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="password"  name="password" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input type="password"  name="r_password" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input type="text" name="email" class="input">
                    </div>
                    <div class="group">
                      <input type="submit" name="sign_up_btn" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
                </form>
                <?php
                  if (isset($_POST['sign_up_btn'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $r_password = $_POST['r_password'];
                    $email = $_POST['email'];
                    if($username=="" || $password=="" || $r_password=="" || $email==""){
                      echo '<script>alert("Enter all the details..!!")</script>';
                    }
                    else{
                      if(strcmp($password,$r_password)==0){
                    $query = "insert into user values('$username','$password','$r_password','$email')";
                    $result = mysqli_query($conn,$query);
                  }
                  else {
                      echo '<script>alert("password not matching")</script>';
                  }
                   }
                  }
                 ?>
            </div>
        </div>
    </div>
</body>
</html>
