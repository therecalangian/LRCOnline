<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admin` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            header("Location: error.php");
        }
    } else {
?>

    <div>
        <img src="logo1.png" alt="Paris" class="center"> 
        <h1 class="login-title" style="color:white;">LRC Online</h1>
        <p class="upm" style="color:white;">University of the Philippines Manila</p>
    </div>

    <form class="form" method="post" name="login">
        <h1 class="signup" style="color:white;">LOGIN</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Sign in" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Register here</a></p>
        
  </form>
<?php
    }
?>
</body>
</html>