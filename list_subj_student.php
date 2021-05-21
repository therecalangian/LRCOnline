<?php
  session_start();
      include 'db_connection.php';

  ?>
<!DOCTYPE html>
<html>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
button {
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


#myBtn:hover {
  box-shadow: 0 10px 10px 0 #7b1113, 0 10px 10px 0 #7b1113;
}
 
#myBtn2:hover {
  box-shadow: 0 10px 10px 0 #7b1113, 0 10px 10px 0 #7b1113;
}

</style>
</head>
<body>

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
      
<center><h3>AVAILABLE SUBJECTS</h3>

<?php
  $sql = "SELECT * FROM subjects";
  $result = mysqli_query($db,$sql) or die(mysqli_error($db));

if(mysqli_num_rows($result) > 0 ){
  while ($row = mysqli_fetch_array ($result)) {
  ?>
    <button id="btn3" disabled="true"><?php echo $row['subject'];?></button>

<?php
 }
}
?>
</center>
<br>

<center><button id="myBtn">SCHEDULE</button></center>
<center>
<div id="myModal" class="modal">
   <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2 align="center">SCHEDULE AN APPOINTMENT</h2>
      </div>
      
      <div class="modal-body">
      <br>
      <?php
        $sql = "SELECT * FROM subjects";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));

        if(mysqli_num_rows($result) > 0 ){
          while ($row = mysqli_fetch_array ($result)) {
        ?>
          <a href="form.php?subject=<?php echo $row['subject'];?>"><button id ="myBtn2"> <?php echo $row['subject'];?></button></a>
        <?php
          }
        }
        ?>
        <br>
        <br>
      </div>
    </div>
</div>
</center>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
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


</body>
</html>
