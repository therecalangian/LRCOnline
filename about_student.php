
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | LRC</title>
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
	
	.serviceBox{
		background: #fff;
		font-family: 'Poppins', sans-serif;
		text-align: center;
		padding: 30px 20px;
		border: 10px solid #ddd;
		border-top-color: #7b1113;
		border-bottom-color: #7b1113;
		border-radius: 20px;
		box-shadow: 5px 5px 5px rgba(0,0,0,0.2);
		position: relative;
	}
	.serviceBox:before{
		content: '';
		border: 3px dashed #ddd;
		border-radius: 20px;
		position: absolute;
		top: 8px;
		bottom: 8px;
		left: 8px;
		right: 8px;
	}
	.serviceBox .service-icon{
		color: #014421;
		font-size: 50px;
		line-height: 50px;
		margin: 0 0 15px;
	}
	.serviceBox .title{
		color: #333;
		font-size: 20px;
		font-weight: 600;
		text-transform: uppercase;
		margin: 0 0 7px;
	}
	.serviceBox .description{
		color: #999;
		font-size: 14px;
		line-height: 24px;
		margin: 0;
	}
	.serviceBox.blue{
		border-top-color: #3D729B;
		border-bottom-color: #3D729B;
	}
	.serviceBox.blue .service-icon{ color: #3D729B; }
	.serviceBox.red{
		border-top-color: #ED5543;
		border-bottom-color: #ED5543;
	}
	.serviceBox.red .service-icon{ color: #ED5543; }
	.serviceBox.purple{
		border-top-color: #924963;
		border-bottom-color: #924963;
	}
	.serviceBox.purple .service-icon{ color: #924963; }
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
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="about_student.php">About <span class="sr-only">(current)</span></a></li>
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


<!-- Demo content-->

<section class="py-5 section-1" >

			<div class = "row">
            <div class="col-sm" >
               <h1 class ="font-weight-bold text-center">ABOUT US</h1>
                <p class="lead text-center" >UPM Learning Resource Center (LRC) provides instructional assistance services <br/> (bridging program, tutorials, simulated exams, reviewers, library, rooms). <br/> <br/>
                  The Establishment of an LRC in each of the 11 UP campuses is part of the support program <br/>for the Excellence-Equity Admission System. The Board of Regents approved the recommendation <br/> for the establishment of an LRC in each UP campus on 17 April 1997.
<br/><br/> 
</p>
            </div>
			
			<!--<div class="col-sm" >
				
            </div>-->
			
			</div>
    
</section>

<section class = "py-5 section-2" >
			
			
			<div class="col-lg-8 mx-auto" style = "position:relative; top:50px;">
                <h1 class=" font-weight-bold text-center">MISSION AND GOALS</h1>
                <strong><p class="lead text-center">Our mission is to supplement, complement, and coordinate existing learning assistance programs wherein the goal of academic excellence
				will be realized in a more caring and nurturing environment.</p></strong>
            </div>	
				
<div class="container" style = "position:relative; top:100px;">
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <div class="serviceBox">
                <div class="service-icon">
                    <span><i class="fa fa-check"></i></span>
                </div>
                <h3 class="title">Provide</h3>
                <p class="description"> Provide alternative avenues for personal growth </p>
				<br>
				<p></p>
				
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="serviceBox">
                <div class="service-icon">
                    <span><i class="fa fa-check"></i></span>
                </div>
                 <h3 class="title">Upgrade</h3>
                <p class="description"> Upgrade student capabilities to meet the demands of UP education, which incude the Natural Sciences,
										Mathematics, Arts and Communications and other specific major courses in their corresponding programs.</p>
            </div>
        </div>
		<div class="col-md-3 col-sm-12">
            <div class="serviceBox">
                <div class="service-icon">
                    <span><i class="fa fa-check"></i></span>
                </div>
                <h3 class="title">Develop</h3>
                <p class="description">Develop relevant learning tools and assistance programs</p>
				<p></p>
			
            </div>
        </div>
    </div>
</div>

</section>




  </body> 

 <!-- FOOTER START -->
	<footer class="footer-16371">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <div class="footer-site-logo mb-4">
              <a href="index.html"> UPM Learning Resource Center</a>
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
