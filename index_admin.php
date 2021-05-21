<?php include 'processForm.php';

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
$events = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
	
	<!-- for footer -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	
	<!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

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
    </style>
  <body>
    <!--navigation start-->
   

<!-- Sticky navbar-->
<header class="header sticky-top" >
    <nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm" style="background-color: #b33939;">
        <div class="container"><a class="navbar-brand" href="#">
            <strong class="h6 mb-0 font-weight-bold text-uppercase">Learning Resource Center</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="about_admin.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="schedule.php">Subjects</a></li>
					<li class="nav-item"><a class="nav-link" href="services.php">Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="services_admin.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_admin.php">Contact</a></li>
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Profile</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Logout</a>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Add Event functionality start-->
<div class="container">
  <div class="row">
    <div class="col-4 offset-md-4 shadow p-3 mb-5 bg-white rounded form-div">
      <form action="index.php" enctype="multipart/form-data" method="post">
        <h3 class="text-center"> Add Event </h3>

        <?php if(!empty($msg)):?>
          <div class="alert <?php echo $css_class; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>


        <div class="form-group text-center">
          <img src="assets/img/img_placeholder.jpg" onclick="triggerClick()" id="displayHolder"/>
          <label for="latestEvent"> Latest Event </label>
          <input type="file" name="latestEvent" onchange="displayImage(this)" id="latestEvent" style="display: none;">
        </div>
        <div class="form-group">
          <label for="eventTitle"> Title </label>
          <textarea name="eventTitle" id="eventTitle" class="form-control" maxlength="40"></textarea>
        </div>
        <div class="form-group">
          <label for="caption"> Caption </label>
          <textarea name="caption" id="caption" class="form-control" maxlength="120"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-warning btn-block" name="save-event">Add Event</button>
        </div>
      </form>
    </div>

  </div>

</div>

<script src="script/script.js"></script>

<!-- Demo content-->
<?php foreach($events as $event): ?>
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
