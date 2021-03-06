<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `admin` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div>
                    <img src='logo1.png' alt='Paris' class='center'> 
                    <h1 class='login-title' style='color:white';>LRC Online</h1>
                    <p class='upm' style='color:white;'>University of the Philippines Manila</p>
                </div>";

            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
            echo "<div>
                    <img src='logo1.png' alt='Paris' class='center'> 
                    <h1 class='login-title' style='color:white';>LRC Online</h1>
                    <p class='upm' style='color:white;'>University of the Philippines Manila</p>
                </div>";
        }
    } else {
?>
    <div>
        <img src="logo1.png" alt="Paris" class="center"> 
        <h1 class="login-title" style="color:white;">LRC Online</h1>
        <p class="upm" style="color:white;">University of the Philippines Manila</p>
    </div>


    <form class="form" action="" method="post">
        
        <h1 class="signup" style="color:white;">SIGN UP</h1>   
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        
        <p class="link">Already have an account? <a href="login.php">Sign in here</a></p>
    </form>
<?php
    }
?>
</body>
</html>