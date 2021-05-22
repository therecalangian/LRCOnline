<?php 
   include('db_connection.php');
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
    


    .container_ap {
      padding: 1%;
      margin: 1%;
      width: 65%;
      background-color: #e8e8e8;
      border-radius: 20px;
      margin-left: auto;
      margin-right: auto;
    }

    #mySelect{
      font-family: Poppins;
      border-radius: 3px;
      font-size: 17px;
      padding: 5px;
    }

    .pending {
      background-color: #f3aa2c;
      color: #ffffff;
      border: #f3aa2c;
    }

    .done {
      background-color: #014421;
      color: #ffffff;
      border: #014421;
    }

    #textBox {
        font-size: 15px;
        font-family: Poppins;
    }

    table {
      font-family: Poppins;
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
                    <li class="nav-item"><a class="nav-link" href="index_admin.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_admin.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="subjects.php">Subjects  <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item active"><a class="nav-link" href="appointments.php">Appointments</a></li>
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
