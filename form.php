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
<section class="py-5 header text-center">
    <div class="container py-5 text-white">
        <header class="py-5" style="color: #1e272e;">
            <h1 class="display-4">Tutorial Program</h1>
            <p class="font-italic mb-1">Free faculty and peer assisted tutorials <br/>
            in Mathematics (Algebra, Trigonometry, Calculus), <br/>Science (chemistry,
            Biology, Physics, Geology), and Communication</p>


        </header>
        <button class="button"><span>Schedule</span></button>
    </div>
</section>


<!-- Sticky navbar-->
<header class="header sticky-top" >
    <nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm" style="background-color: #b33939;">
        <div class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Learning Resource Center</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Servicese</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Add Event functionality start-->


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
    $sql = "INSERT into form (subject, name, year_level, email, mobile_number, date_appoint, time_appoint, course, topic) 
            VALUES ('$_POST[subject]','$_POST[name]', '$_POST[year_level]', '$_POST[email]', '$_POST[mobile_number]','$_POST[date_appoint]', '$_POST[time_appoint]', '$_POST[course]', '$_POST[topic]')";
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

<section class="py-5 section-2">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Demo section 2</h2>
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>


  <!-- HEADER START -->
  <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: cover; background-image: url(https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-0.3.5&s=c3d0603820b595592d80f5a239938c67&auto=format&fit=crop&w=1500&q=80);">
     <div class="container-fluid">
        <div class="row  justify-content-center align-items-center d-flex text-center h-100">
          <div class="col-12 col-md-8  h-50 ">
              <h1 class="display-2  text-light mb-2 mt-5"><strong>Align Center</strong> </h1>
              <p class="lead  text-light mb-5">Sub-heading. Header 100% height with center align items</p>
              <p><a href="https://blueprintsapp.launchaco.com/" class="btn bg-danger shadow-lg btn-round text-light btn-lg btn-rised">Get More Templates Now ></a></p>

            <div class="btn-container-wrapper p-relative d-block  zindex-1">
              <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="http://bootstraptor.com">
                  <i class="fa fa-angle-down fa-4x text-light"></i>
                  </a>
            </div>
          </div>

        </div>
      </div>
      </section>

  <!-- HEADER END -->

  </body>
</html>

