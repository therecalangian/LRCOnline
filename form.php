<?php
  session_start();
  include 'db_connection.php';
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LRC Home</title>
    <link rel="stylesheet" href="assets/style.php"/>
    <!-- for header-->
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
    input{
      margin-right: 20px;
       margin-left: 10px;
    }

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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_student.php">About</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Schedule</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="list_subj_student.php">Subjects</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="schedule_student.php">How to Schedule</a>
                      </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="services_student.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_student.php">Contact</a></li>
          
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Add Event functionality start-->

<section class="py-5 section-1">
<center><div class="container">
  <div class="row">
    <div class="col-10 offset-md-1 shadow p-3 mb-5 bg-white rounded form-div">
        <h3 class="text-center"> APPOINTMENT FORM </h3>
<br>
        <?php if(!empty($msg)):?>
          <div class="alert <?php echo $css_class; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>



        <?php


  $subject = $name = $year_level = $email = $mobile_number = $date_appoint = $time_appoint = $course = $topic = "";

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT into form (subject, name, year_level, email, mobile_number, date_appoint, time_appoint, course, topic, status) 
            VALUES ('$_POST[subject]','$_POST[name]', '$_POST[year_level]', '$_POST[email]', '$_POST[mobile_number]','$_POST[date_appoint]', '$_POST[time_appoint]', '$_POST[course]', '$_POST[topic]', 'pending')";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    $active = isset($row['active']);

    $_SESSION['addToDatabase'] = "username";
    header("Location: list_subj_student.php");
  }  
?>

<!DOCTYPE html>  
<html>
<head>
  <title>LRC Online</title> 


</head>
<body>

                
              

                <form method="post">   
                  <?php
                    $subject_name = $_GET['subject'];
                  ?>
         
                Subject: <input type="text" name="subject" size="20" value="<?php echo $subject_name;?>" readonly>
                 Date: <input type="date" name="date_appoint" size="20" value="<?php  echo $date_appoint;?>" required>
                  Time: <input type="time" name="time_appoint" size="20" value="<?php  echo $time_appoint;?>" required>
                <br>
                  <br>
                
                Full Name: <input type="text" name="name" size="20" value="<?php echo $name;?>" placeholder="e.g. Juan M. dela Cruz" required>
                Year Level: <select name="year_level" value="<?php  echo $year_level;?>" required>
                    <option> </option>
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                    <option> 4 </option>
                  </select>
                  Course: <select name="course" value="<?php  echo $course;?>" required>
                    <option> </option>
                    <option> BS Biochemistry </option>
                    <option> BS Biolgy </option>
                    <option> BS Computer Science </option>
                    <option> BA Development Studies </option>
                    <option> BA Organizational Communication </option>
                    <option> BA Philippine Arts </option>
                    <option> BA Political Science </option>
                    <option> BA Behavioral Studies </option>
                    <option> BA Social Sciences </option>
                    <option> BS Physical Therapy </option>
                    <option> BS Speech Pathology </option>
                    <option> BS Nursing </option>
                    <option> BS Industrial Pharmacy </option>
                    <option> BS Pharmacy </option>
                    <option> BS Public Health </option>
                    <option> BS Occupational Therapy </option>
                    <option> BS Basic Medical Sciences </option>
                    <option> D Dental Medicine </option>
                  </select>
                 <br>
                  <br>
                  Email: <input type="text" name="email" size="20" value="<?php  echo $email;?>" required></li> 
                 Mobile: <input type="text" name="mobile_number" size="20" value="<?php  echo $mobile_number;?>" required>
                  <br>
                  <br>
                Topic: <br><textarea name="topic" value="<?php  echo $topic;?>"  rows="4" cols="45" required></textarea>
                  <br>
                  <br>
               <center><input id = "submitForm" type="submit" step="any" name="save" value="Submit"></center>

                </form>
          
</body>
</html>
    </div>

  </div>

</div></center>
</section>

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





  <!-- HEADER END -->

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
</html>

