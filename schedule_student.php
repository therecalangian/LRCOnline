
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Schedule | LRC</title>
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
	
	<!-- schedule css -->
	.container1 {
		padding-top: 50px;
		margin: 40px;
	}
	
	.serviceBox {
		background: linear-gradient(to right bottom,#a71d31, #b33939);
		font-family: 'Poppins', sans-serif;
		text-align: center;
	
		padding: 25px 2px 2px;
		border-radius: 30px;
	}
	.serviceBox .title {
		color: #fff;
		font-size: 20px;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 0.5px;
		margin: 0 10px 20px;
	}
	
	.serviceBox .service-content{
		background-color: #fff;
		padding: 35px 20px 20px;
		border-radius: 0 0 28px 28px;
		position: relative;
		z-index: 1;
	}
	.serviceBox .service-content:before,
	.serviceBox .service-content:after{
		content: '';
		background: linear-gradient(to right bottom, #a71d31, #b33939);
		height: 15px;
		width: 30px;
		border-radius: 0 0 200px 200px;
		position: absolute;
		left: 50%;
		top: 0;
		transform: translateX(-50%);
	}
	.serviceBox .service-content:after{
		background: #fff;
		height: 50px;
		width: auto;
		border-radius: 0;
		transform: translateX(0);
		left: -2px;
		right: -2px;
		z-index: -1;
	}
	.serviceBox .service-icon{
		color: #014421;
		font-size: 60px;
		line-height: 50px;
		margin: 0 0 15px;
	}
	.serviceBox .description{
		color: #777;
		font-size: 14px;
		line-height: 24px;
		margin: 0;
	}
	.serviceBox.blue,
	.serviceBox.blue .service-content:before{
		background: linear-gradient(to right bottom, #a71d31, #b33939);
		shadow-lg: 10px;
	}
	.serviceBox.blue .service-icon{ color: #014421; }
	.serviceBox.green,
	.serviceBox.green .service-content:before{
		background: linear-gradient(to right bottom, #A3CD39, #6DBD42);
		-webkit-box-shadow: 3px 3px 5px 6px #ccc;
	}
	.serviceBox.green .service-icon{ color: #7b1113; }
	.serviceBox.gray,
	.serviceBox.gray .service-content:before{
		background: linear-gradient(to right bottom, #014421, #00a34e);
	}
	.serviceBox.gray .service-icon{ color: #354A5F; }
	@media only screen and (max-width: 990px){
		.serviceBox{ margin: 0 0 30px; }
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
                    <li class="nav-item"><a class="nav-link" href="index_student.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_student.php">About</a></li>
                     <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Schedule<span class="sr-only">(current)</span></a>
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


<!-- Demo content-->

<section class="py-5 section-2">
  <div class="section-title text-center pb-10">
                        <h1 class="title font-weight-bold">HOW TO SCHEDULE</h1>
                        
						<p class="text-muted lead">Students' guide to successfully schedule an online appointment </p>
						
    </div> <!-- row -->
				
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
<div class="container1 py-5"  style = "margin:40px; padding-top: 50px;">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title">STEP 1</h3>
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-pencil"></i></span>
                    </div>
                    <p class="description" style = "padding-bottom: 32px;">Identify which subject and topic you need help with.</p>
					<p></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <h3 class="title">STEP 2</h3>
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-calendar"></i></span>
                    </div>
                    <p class="description"  style = "padding-bottom: 27px;"> Schedule your tutorial 3 working days in advance so that the peer tutor may be informed.</p>
                </div>
            </div>
        </div>
		 <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <h3 class="title">STEP 3</h3>
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-laptop"></i></span>
                    </div>
                    <p class="description" style = "padding-bottom: 27px;">Completely fill out the form with the details needed to schedule your appointment.</p>
					
					
                </div>
            </div>
        </div>
		 <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <h3 class="title">STEP 4</h3>
                <div class="service-content">
                    <div class="service-icon">
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <p class="description" style = "padding-bottom: 27px;">Follow up on your request the next working day to confirm if your
								 appointment has been set.</p>
                </div>
            </div>
        </div>
		
    </div>
</div>
									
           >
</section>

  <!-- HEADER START -
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

  HEADER END -->

  </body> 

 <!-- FOOTER START -->
	<footer class="footer-16371">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <div class="footer-site-logo mb-4">
              <a href="index_student.php"> UPM Learning Resource Center</a>
            </div>
            <ul class="list-unstyled nav-links mb-5">
              <li><a href="about_student.php">About</a></li>
              <li><a href="services_student.php">Services</a></li>
              <li><a href="schedule_student.php">Schedule</a></li>
              <li><a href="contact_student.php">Contact</a></li>
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
