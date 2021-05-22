<?php 
   include('db_connection.php');
?>

<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LRC Home</title>
    <link rel="stylesheet" href="assets/style.php"/>
    <!-- for header-->

    <!--FONTS-->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/gidole-regular" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/carlito" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/hussar-bold" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    
    <!-- Bootstrap 4-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- fonts - icomoon -->
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
  
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
    .button {
      border-radius: 44px;
      background-color: #b33939;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 24px;
      padding: 15px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }

    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 25px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    


 

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 40%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.close1 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #7b1113;
  color: white;
}

.modal-body {padding: 2px 16px;}


#myBtn{
  border-radius: 25px;
  background-color: #7b1113;
  color: white;
  padding: 14px 20px;
  margin: 8px 10px;
  border: none;
  cursor: pointer;
  width: 200px;
  opacity: 0.9;
}

#myBtn1{
  border-radius: 25px;
  background-color: #7b1113;
  color: white;
  padding: 14px 20px;
  margin: 8px 10px;
  border: none;
  cursor: pointer;
  width: 200px;
  opacity: 0.9;
}

#btn3{
  border-radius: 10px;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 10px;
  border: 2px solid #7b1113;
  cursor: pointer;
  width: 250px;
  opacity: 0.9;
}

/* Set a style for all buttons */
.buttonJu {
  border-radius: 25px;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 10px;
  border: 2px solid #7b1113;
  cursor: pointer;
  width: 250px;
  opacity: 0.9;
}

#myBtn1:hover {
  box-shadow: 0 10px 10px 0 #7b1113, 0 10px 10px 0 #7b1113;
}

#myBtn:hover {
  box-shadow: 0 10px 10px 0 #7b1113, 0 10px 10px 0 #7b1113;
}
 
#myBtn2:hover {
  box-shadow: 0 10px 10px 0 #7b1113, 0 10px 10px 0 #7b1113;
}

    </style>

<body>
    <!--navigation start-->
    <!-- Demo header-->


<!-- Sticky navbar-->
<header class="header sticky-top" >
    <nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm" style="background-color: #b33939;">
        <div class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Learning Resource Center</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index_admin.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_admin.php">About</a></li>
                    <li class="nav-item active"><a class="nav-link" href="subjects.php">Subjects <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="appointments.php">Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="services_admin.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_admin.php">Contact</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Profile</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Settings</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="py-5 section-1">
<center><div class="container">
  <div class="row">
    <div class="col-10 offset-md-1 shadow p-3 mb-5 bg-white rounded form-div">
        <h3 class="text-center"> LIST OF SUBJECTS </h3>
<br>
      

<?php
  $sql = "SELECT * FROM subjects";
  $result = mysqli_query($db,$sql) or die(mysqli_error($db));

if(mysqli_num_rows($result) > 0 ){
  while ($row = mysqli_fetch_array ($result)) {
  ?>
    <button class="buttonJu" id="btn3" disabled="true"><?php echo $row['subject'];?></button>

<?php
 }
}
?>
</center>

<center>
  <center><button class="buttonJu" id="myBtn1">REMOVE SUBJECT</button>
  <button class="buttonJu" id="myBtn">ADD SUBJECT</button></center>
 <br>

<center><div id="myModal1" class="modal">
   <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>REMOVE SUBJECT</h2>
      </div>
      
      <div class="modal-body">
      <br>
      <?php
        $sql = "SELECT * FROM subjects";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));

        if(mysqli_num_rows($result) > 0 ){
          while ($row = mysqli_fetch_array ($result)) {
        ?>
          <a href="delete.php?subject=<?php echo $row['subject'];?>"><button class="buttonJu" id ="myBtn2"> <?php echo $row['subject'];?></button></a>
        <?php
          }
        }
        ?>
        <br>
      </div>
    </div>
</div></center>

</center>

<center><div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2>ADD SUBJECT</h2>
    </div>
    <div class="modal-body">
      <?php
        $subject = "";

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $sql = "INSERT into subjects (subject) 
                  VALUES ('$_POST[subject]')";
          $result = mysqli_query($db,$sql) or die(mysqli_error($db));
            
          
          $active = isset($row['active']);
          $_SESSION['addSubjToDatabase'] = "username";
          header('Location: subjects.php');
          echo "<meta http-equiv='refresh' content='0'>"; 
        }  
      ?>

      <center>
        <form method="post" action ="subjects.php">   
        <br>
          Name of Subject: <input type="text" name="subject" size="20" value="<?php echo $subject;?>" required>
          <br>
          <br>
           <input id = "submitForm" type="submit" step="submit" name="save" value="Submit">
          <br>
          <br>
        </form>
      </center>

    </div>
  </div>
</div></center>
</section>

<script>
// Get the modal
var modal = document.getElementById("myModal");
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close1")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btn1.onclick = function() {
  modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

span1.onclick = function() {
  modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
          
</body>
</html>
    </div>

  </div>

</div></center>

<script src="script/script.js"></script>

<!-- Demo content-->
<!--<?php foreach($events as $event): ?>-->
<section class="py-5 section-1">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-4 mx-auto" >
              <img width="300px" src="uploads/<?php echo $event['latestEvent'];?>" />
            </div>
            <div class="col-lg-8 mx-auto" style="margin-top: 35px;">
                <h2><?php echo $event['eventTitle']; ?></h2>
                <p class="text-muted lead"><?php echo $event['caption']; ?></p>
            </div>
        </div>
    </div>
</section>
<?php endforeach; ?>


  </body>
  <!-- FOOTER START -->
  <footer class="footer-16371">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <div class="footer-site-logo mb-4">
              <a href="index.php"> UPM Learning Resource Center</a>
            </div>
            <ul class="list-unstyled nav-links mb-5">
              <li><a href="about_admin.php">About</a></li>
        <li><a href="subjects.php">Subjects</a></li>
        <li><a href="appointments.php">Appointments</a></li>
              <li><a href="services_admin.php">Services</a></li>
              <li><a href="contact_admin.php">Contact</a></li>
            </ul>

            <div class="social mb-4">
              <h3>Stay in touch</h3>
              <ul class="list-unstyled">
                <li class="fb"><a href="https://www.facebook.com/upmlrc"><span class="icon-facebook"></span></a></li>
                <li class="pin"><a href="contact.php"><span class="icon-phone"></span></a></li>
        <li class="tw"><a href="contact.php"><span class="icon-envelope"></span></a></li>
              </ul>
            </div>

            <div class="copyright">
              <p class="mb-0"><small>&copy; UPM LRC. All Rights Reserved.</small></p>
            </div>


          </div>
        </div>
      </div>
    </footer>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
<!-- FOOTER END -->
</html>
