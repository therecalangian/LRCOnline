<?php 
   include('db_connection.php');
   session_start();
   $con = mysqli_connect("localhost","root","","lrc_online");
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

    
    <!-- Bootstrap 4-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
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
    


    .container_ap {
      padding: 1%;
      margin: 1%;
      width: 65%;
      background-color: #efecec;
      border-radius: 20px;
      margin-left: auto;
      margin-right: auto;
    }

    #mySelect{
      font-family: Bebas;
      border-radius: 5px;
      font-size: 17px;
    }

    .pending {
      background-color: #f3aa2c;
      color: #ffffff;
    }

    .done {
      background-color: #014421;
      color: #ffffff;
    }

    #textBox {
        font-size: 15px;
        font-family: GidoleRegular;
    }

    table {
      font-family: GidoleRegular;
      width: 100%;
    }

    td {
      padding-left: 15px;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-right: 15px;
    }

    #myInput {
      float: right;
      margin-right: 10%;
    }


    </style>

    <script>
      $(document).ready(function()
      {
        $("#myInput").on("keyup", function() 
        {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() 
          {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>

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
                    <li class="nav-item active"><a class="nav-link" href="index_admin.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_admin.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="schedule.php">Subjects</a></li>
                    <li class="nav-item active"><a class="nav-link" href="appointments.php">Appointments <span class="sr-only">(current)</span></a></li>
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


<?php 
  if(isset($_GET['status']) && $_GET['name'])
  {
    $stat = $_GET['status'];
    $n = $_GET['name'];
    $sql="UPDATE form SET status='$stat' WHERE name='$n'"; 
    $con->query($sql);
  } 
?>

<!-- Demo content-->
<section class="py-5 section-1">
  <p>
    <input type="text" id="myInput" placeholder="Filter" title="Type in a name">
  </p>
  <br>

<?php
  $sql = "SELECT * FROM form ORDER BY status DESC";
  
  $result = mysqli_query($db, $sql); 
  while ($row = mysqli_fetch_array($result))
  {
    $subject = $row['subject'];
    $name = $row['name'];
    $year = $row['year_level'];
    $course = $row['course'];
    $email = $row['email'];
    $mobile = $row['mobile_number'];
    $topic = $row['topic'];
    $date = $row['date_appoint'];
    $time = $row['time_appoint'];
    $status = $row['status'];
    $date_ap = date("M j, Y", strtotime($date));
    $time_ap = date("g:i A", strtotime($time));
    $choice1 = 'pending';
    $choice2 = 'done';
?>

<p>
  <form action="" method="POST" id="myForm">
    <table id="myTable" class="container_ap">
      <colgroup>
        <col span="1" style="width: 30%; border-right: 3px solid #a6a6a6;">
        <col span="1" style="width: 20%; padding: 1%">
        <col span="1" style="width: 40%;">
        <col span="1" style="width: 10%;">
      </colgroup>

      <tbody>
        <tr>
          <td rowspan="4">
            <?php echo $name; ?><br>
            <?php echo $year . '-' . $course;  ?><br>
            <?php echo $email; ?><br>
            <?php echo $mobile; ?>
          </td>
          <td rowspan="4">
            <?php echo $subject; ?><br>
            <?php echo $date_ap; ?><br>
            <?php echo $time_ap; ?>
          </td>
          <td rowspan="4">
            Topics:<br>
            <?php echo $topic; ?>
          </td>
          <td rowspan="4">
            <select name="status" class = "<?php echo $row['status']; ?>" id="mySelect" onchange="location = this.value;">
                <option selected style="display:none;"><?php echo $status; ?></option>
                <option class="sel" value="appointments.php?status=pending&name=<?php echo $name; ?>" <?php if ($row['status'] == 'pending') { ?>style="display:none;" <?php }; ?>><?php echo $choice1; ?></option>
                <option class="sel" value="appointments.php?status=done&name=<?php echo $name; ?>" <?php if ($row['status'] == 'done') { ?>style="display:none;" <?php }; ?>><?php echo $choice2; ?></option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</p>

<?php } ?>

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
